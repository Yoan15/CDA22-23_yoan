using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_CRUD_JSON
{
    class DaoJson
    {
        public static void WriteFile(string path, string text)
        {
            File.WriteAllText(path, text);
        }

        public static string ReadFile(string path)
        {
            string content = File.ReadAllText(path);
            return content;
        }
    }
}
