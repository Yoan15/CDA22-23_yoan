using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_compte
{
    class Clients
    {
        public string Cin { get; set; }

        public string Nom { get; set; }

        public string Prenom { get; set; }

        public string Tel { get; set; }

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

        public string Afficher()
        {
            return $"CIN : {Cin}\nNom : {Nom}\nPrénom : {Prenom}\nTéléphone : {Tel}";
        }
    }
}
