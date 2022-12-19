using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CrudProduitsProgression
{
    public class Produits
    {
        public int IdProduit { get; set; }
        public string LibelleProduit { get; set; }
        public int NumeroProduit { get; set; }
        public int Quantite { get; set; }


        public Produits(int idProduit, string libelleProduit, int numeroProduit, int quantite)
        {
            IdProduit = idProduit;
            LibelleProduit = libelleProduit;
            NumeroProduit = numeroProduit;
            Quantite = quantite;
        }
        public Produits(int idProduit)
        {
            IdProduit = idProduit;
        }

        public Produits()
        {
        }

        /// <summary>
        /// Méthode de comparaison du produit avec celui passé en paramètre
        /// </summary>
        /// <param name="obj"></param>
        /// <returns>vrai si les objets sont égaux (même Id)</returns>
        public override bool Equals(object obj)
        {
            if (this.IdProduit == ((Produits) obj).IdProduit)
                return true;
            return false;
        }
        
        
    }
}
