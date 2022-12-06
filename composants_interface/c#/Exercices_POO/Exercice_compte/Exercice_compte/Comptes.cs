using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_compte
{
    class Comptes
    {
        public double Solde { get; private set; }

        public int Code { get; private set; }

        public Clients Proprietaire { get; set; }

        private static int NbCompte { get; set; } = 0; //permet de compter les comptes créés par un client. Il est incrémenté à chaque constructeur 

        public Comptes(Clients proprietaire)
        {
            Code = ++NbCompte;
            Solde = 0; //initialisation du solde à 0
            Proprietaire = proprietaire;
        }

        public void Crediter(double somme)
        {
            this.Solde += somme;
        }

        public void Crediter(double somme, Comptes compte)
        {
            this.Crediter(somme);
            compte.Debiter(somme);
        }

        public void Debiter(double somme)
        {
            this.Solde -= somme;
        }

        public void Debiter(double somme, Comptes compte)
        {
            this.Debiter(somme);
            compte.Crediter(somme);
        }

        public string Afficher()
        {
            return $"Code : {Code}\nSolde : {Solde}\nPropriétaire du compte : {Proprietaire}";
        }

        public static void AfficheNbDeComptes()
        {
            Console.WriteLine($"nombre de comptes : {NbCompte}");
        }
    }
}
