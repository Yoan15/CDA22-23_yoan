using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace testsUnitaires
{
    /// <summary>
    /// classe compte
    /// </summary>
    public class Compte
    {
        /// <summary>
        /// getter et setter du client
        /// </summary>
        public string Client { get; set; }
        /// <summary>
        /// getter et setter du solde
        /// </summary>
        public double Solde { get; set; }
        /// <summary>
        /// constructeur du compte
        /// </summary>
        /// <param name="client"></param>
        /// <param name="solde"></param>
        public Compte(string client, double solde)
                {
                    Client = client;
                    Solde = solde;
                }

        /// <summary>
        /// constante qui affiche un message si le montant à débiter est plus élevé que le solde client
        /// </summary>
        public const string DebitMontantSuperieurSoldeMessage = "Le montant à débiter est supérieur au solde";

        /// <summary>
        /// constante qui affiche un message si le montant est négatif
        /// </summary>
        public const string DebitMontantNegatifMessage = "Le montant à débiter est négatif";

        /// <summary>
        /// Test sandcastle Debit
        /// </summary>
        /// <param name="montant"></param>
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

        /// <summary>
        /// test sandcastle Credit
        /// </summary>
        /// <param name="montant"></param>
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
