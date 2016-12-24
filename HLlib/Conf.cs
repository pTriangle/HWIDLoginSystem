using System;

namespace HLlib
{
    class Conf
    {
        static string hostname = "127.0.0.1";
        static string database = "login";
        static string username = "root";
        static string password = "root";

        #region Crypt String
        public static string configkey = "Data Source=" + hostname + ";Initial Catalog=" + database + ";User Id=" + username + ";Password=" + password + ";";
        #endregion
    }
}
