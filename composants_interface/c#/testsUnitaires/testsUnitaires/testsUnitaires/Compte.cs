using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace testsUnitaires
{
    public class Compte
    {
        public string Client { get; set; }
        public double Solde { get; set; }
        public Compte(string client, double solde)
                {
                    Client = client;
                    Solde = solde;
                }

        public const string DebitMontantSuperieurSoldeMessage = "Le montant à débiter est supérieur au solde";

        public const string DebitMontantNegatifMessage = "Le montant à débiter est négatif";

        public void Debit(double montant)
        {
            if (montant > Solde)
            {
                throw new ArgumentOutOfRangeException("montant", montant, DebitMontantSuperieurSoldeMessage);
            }

            if (montant < 0)
            {
                throw new ArgumentOutOfRangeException("montant", montant, DebitMontantNegatifMessage);
            }

            Solde += montant;
        }

        public void Credit(double montant)
        {
            if (montant < 0)
            {
                throw new ArgumentOutOfRangeException("montant");
            }

            Solde += montant;
        }
    }
}
