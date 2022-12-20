using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CrudProduitsProgression
{
    public class Categories
    {
        public int IdCategorie { get; set; }
        public string LibelleCategorie { get; set; }
        public string DescCategorie { get; set; }

        public Categories(int idCategorie, string libelleCategorie, string descCategorie)
        {
            IdCategorie = idCategorie;
            LibelleCategorie = libelleCategorie;
            DescCategorie = descCategorie;
        }

        public Categories(int idCategorie)
        {
            IdCategorie = idCategorie;
        }

        public Categories()
        {
        }

        /// <summary>
        /// Méthode de comparaison du produit avec celui passé en paramètre
        /// </summary>
        /// <param name="obj"></param>
        /// <returns>vrai si les objets sont égaux (même Id)</returns>
        public override bool Equals(object obj)
        {
            try
            {
                if (this.IdCategorie == ((Categories)obj).IdCategorie)
                {
                    return true;
                }
            }
            catch (Exception)
            {

            }
            return false;
        }
    }
}
