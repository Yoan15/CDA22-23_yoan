﻿using System;
using System.Collections.Generic;
using System.Text;

namespace ConsoleApp1
{
    
        public class Compte
        {
            public string Client { get; set; }
            public double Solde { get; set; }
            public const string DebitMontantSuperieurSoldeMessage = "Le montant à débiter est supérieur au solde";
            public const string DebitMontantNegatifMessage = "Le montant à débiter est négatif";
            public Compte(string client, double solde)
            {
                Client = client;
                Solde = solde;
            }


            /// <summary>
            /// Permet de déduire le montant du solde
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
                Solde += montant; // code incorrect volontairement
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
