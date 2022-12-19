using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CrudProduitsProgression
{
    class Categories
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


    }
}
