using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_salaries_salaires
{
    class Entreprise
    {
        public string Nom { get; set; }
        public List<Commerciaux> ListCommerciaux { get; set; }

        public List<Techniciens> ListTechniciens { get; set; }

        public Entreprise(string nom)
        {
            Nom = nom;
            ListCommerciaux = new List<Commerciaux>();
            ListTechniciens = new List<Techniciens>();
        }

        public void Embaucher(Employes e)
        {
            switch (e.GetType().Name)
            {
                case "Commerciaux": ListCommerciaux.Add((Commerciaux)e);
                    break;
                case "Vendeurs":
                    ListCommerciaux.Add((Vendeurs)e);
                    break;
                case "Representants":
                    ListCommerciaux.Add((Representants)e);
                    break;
                case "Techniciens":
                    ListTechniciens.Add((Techniciens)e);
                    break;
                case "Interimaires":
                    ListTechniciens.Add((Interimaires)e);
                    break;
                default:
                    break;
            }
        }

        public double MasseSalariale()
        {
            double masseSalariale = 0;
            List<Employes> liste = new List<Employes>();
            liste.AddRange(ListCommerciaux);
            liste.AddRange(ListTechniciens);
            foreach (var emp in liste)
            {
                masseSalariale += emp.CalculerSalaire();
            }
            return masseSalariale;
        }

        public override string ToString()
        {
            String presentation = "";
            presentation += $"Nom entreprise : {Nom}\n";
            presentation += "\n COMMERCIAUX";
            foreach (var comm in ListCommerciaux)
            {
                presentation += "\n\t" + comm;
            }
            presentation += "\n TECHNICIENS";
            foreach (var tech in ListTechniciens)
            {
                presentation += "\n\t" + tech;
            }
            return presentation + "\n\n soit un total de " + MasseSalariale();
        }
    }
}
