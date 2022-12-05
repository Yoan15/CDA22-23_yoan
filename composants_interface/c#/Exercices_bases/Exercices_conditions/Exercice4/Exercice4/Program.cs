using System;

namespace Exercice4
{
    class Program
    {
        static void Main(string[] args)
        {
            int _dommages;
            double _franchise;
            Console.WriteLine("Veuillez saisir le montant des dommages : ");
            _dommages = Convert.ToInt32(Console.ReadLine());
            _franchise = _dommages * 0.1;
            if (_franchise>4000)
            {
                _franchise = 4000;
            }
            Console.WriteLine("Le montant à rembourser est de "+_dommages+" euros, la franchise est de "+_franchise+" euros.");
        }
    }
}
