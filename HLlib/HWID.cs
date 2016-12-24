using System;
using System.Management;

namespace HLlib
{
    public static class HWID
    {
        static string hwid_str;
        static string ram;
        static string ramid;
        static string cpu;
        static string mobo;
        static string moboid;
        static string cpuid;
        static string hddid;
        static string hddstr;

        public static string getHWID()
        {
            ramID();
            cpuID();
            moboID();
            hddID();
            hwid_str = ramid + "-" + cpuid + "-" + moboid + "-" + hddstr;
            return hwid_str;
        }

        static void cpuID()
        {
            ManagementObjectCollection mbsList = null;
            ManagementObjectSearcher mbs = new ManagementObjectSearcher("Select * From Win32_processor");
            mbsList = mbs.Get();

            foreach (ManagementObject mo in mbsList)
            {
                cpu = mo["ProcessorID"].ToString();
                cpuid = cpu.Substring(cpu.Length - 10);
            }
        }

        static void moboID()
        {
            ManagementObjectSearcher mos = new ManagementObjectSearcher("SELECT * FROM Win32_BaseBoard");
            ManagementObjectCollection moc = mos.Get();

            foreach (ManagementObject mo in moc)
            {
                mobo = (string)mo["SerialNumber"];
                moboid = mobo.Substring(mobo.Length - 10);
            }
        }

        static string hddID()
        {
            ManagementObjectSearcher searcher = new ManagementObjectSearcher("SELECT * FROM Win32_PhysicalMedia");

            foreach (ManagementObject wmi_HD in searcher.Get())
            {
                if (wmi_HD["SerialNumber"] != null)
                    hddid = (string)wmi_HD["SerialNumber"].ToString();

                hddstr = hddid.Substring(hddid.Length - 14);

            }
            return string.Empty;
        }

        static void ramID()
        {
            ManagementObjectSearcher mor = new ManagementObjectSearcher("SELECT * FROM Win32_PhysicalMemory");
            ManagementObjectCollection mok = mor.Get();

            foreach (ManagementObject morm in mok)
            {
                ram = (string)morm["PartNumber"];
                ramid = ram.Substring(ram.Length - 10);
            }
        }
    }
}
