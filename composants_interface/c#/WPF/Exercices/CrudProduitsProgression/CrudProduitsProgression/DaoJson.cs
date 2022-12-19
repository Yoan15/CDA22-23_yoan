using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CrudProduitsProgression
{
    class DaoJson
    {
        public static void EcrireFichier(string path,string texte)
        {
            File.WriteAllText(path, texte);
        }

        public static string LireFichier(string path)
        {
            string contenu = File.ReadAllText(path);
            return contenu;
        }
    }
}
