using System;

namespace testsUnitaires
{
    class Program
    {
        static void Main(string[] args)
        {
            Compte compte = new Compte("Toto", 200);
            compte.Credit(100);
            compte.Debit(50);
            Console.WriteLine("Le nouveau solde est de : {0}€", compte.Solde);
            Console.ReadKey();
        }
    }
}
