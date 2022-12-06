using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_compte
{
    class Clients
    {
        public String Cin { get; set; }

        public String Nom { get; set; }

        public String Prenom { get; set; }

        public String Tel { get; set; }

        public Clients(string cin, string nom, string prenom, string tel)
        {
            Cin = cin;
            Nom = nom;
            Prenom = prenom;
            Tel = tel;
        }

        public Clients(string cin, string nom, string prenom)
        {
            Cin = cin;
            Nom = nom;
            Prenom = prenom;
        }

        public String Afficher()
        {
            return $"CIN : {Cin}\nNom : {Nom}\nPrénom : {Prenom}\nTéléphone : {Tel}";
        }
    }
}
