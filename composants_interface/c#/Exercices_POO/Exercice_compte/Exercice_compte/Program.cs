using System;

namespace Exercice_compte
{
    class Program
    {
        static void Main(string[] args)
        {
            Clients client1;
            Clients client2;
            client1 = new Clients("EE111222", "Salim", "Omar", "06111111");
            client2 = new Clients("EE222333", "Dupond", "Claude", "06222222");
            Comptes compte1;
            Comptes compte2;
            compte1 = new Comptes(client1);
            compte2 = new Comptes(client2);
            compte1.Dump();
            compte2.Dump();
            //Console.WriteLine(client1.Afficher());
            Console.WriteLine(compte1.Afficher());
            
            Console.WriteLine("----------------------------------------------------------------------");
            compte1.Crediter(512.4);
            Console.WriteLine(compte1.Afficher());

            Console.WriteLine("----------------------------------------------------------------------");
            compte2.Crediter(1687.75);
            Console.WriteLine(compte2.Afficher());
            
            Console.WriteLine("----------------------------------------------------------------------");
            compte1.Debiter(15.4);
            Console.WriteLine(compte1.Afficher());
            
            Console.WriteLine("----------------------------------------------------------------------");
            compte2.Debiter(87.75);
            Console.WriteLine(compte2.Afficher());
            
            Console.WriteLine("----------------------------------------------------------------------");
            compte1.Crediter(250, compte2);
            Console.WriteLine(compte1.Afficher());
            
            Console.WriteLine("----------------------------------------------------------------------");
            compte2.Crediter(10, compte1);
            Console.WriteLine(compte2.Afficher());
            
            Console.WriteLine("----------------------------------------------------------------------");
            compte1.Debiter(50, compte2);
            Console.WriteLine(compte1.Afficher());
            
            Console.WriteLine("----------------------------------------------------------------------");
            compte2.Debiter(25, compte1);
            Console.WriteLine(compte2.Afficher());
            Comptes.AfficheNbDeComptes();
            
        }
    }
}
