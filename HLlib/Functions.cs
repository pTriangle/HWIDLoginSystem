using System;
using Microsoft.VisualBasic.Devices;
using System.Net;
using System.IO;

namespace HLlib
{
    public static class Functions
    {
        public static string getPCName()
        {
            Computer pc = new Computer();
            return pc.Name.ToString();
        }

        public static string getIP()
        {
            String direction = "";
            WebRequest request = WebRequest.Create("http://checkip.dyndns.org/");
            using (WebResponse response = request.GetResponse())
            using (StreamReader stream = new StreamReader(response.GetResponseStream())) 
                direction = stream.ReadToEnd();

            int first = direction.IndexOf("Address: ") + 9;
            int last = direction.LastIndexOf("</body>");
            direction = direction.Substring(first, last - first);
            return direction;
        }
    }
}
