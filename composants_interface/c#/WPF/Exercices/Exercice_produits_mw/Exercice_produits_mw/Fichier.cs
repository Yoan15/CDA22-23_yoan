using System;
using System.IO;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_produits_mw
{
    class Fichier
    {
        public List<string[]> ReadFile(string filenamepath)
        {
            string[] tab;
            string[] line;
            List<string[]> tabLine = new List<string[]>();
            string filename = @"../../../produits.txt";
            tab = File.ReadAllLines(filename);
            foreach (var item in tab)
            {
                line = item.Split(",");
                tabLine.Add(line);
            }
            return tabLine;
        }

        public void WriteFile(List<string[]> liste, string filenamepath)
        {
            string[] enregistrements = new string[liste.Count];
            string line;
            int i = 0;
            foreach (string[] item in liste)
            {
                line = "";
                foreach (var elmt in item)
                {
                    line += elmt + ",";
                }
                enregistrements[i] = line;
                i++;
            }
            File.WriteAllLines(filenamepath, enregistrements);
        }
    }
}
