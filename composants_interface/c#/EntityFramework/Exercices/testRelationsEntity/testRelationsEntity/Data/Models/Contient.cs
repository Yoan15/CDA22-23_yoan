using System;
using System.Collections.Generic;

#nullable disable

namespace testRelationsEntity.Data.Models
{
    public partial class Contient
    {
        public int IdProduit { get; set; }
        public int IdCategorie { get; set; }

        public virtual Category Categorie { get; set; }
        public virtual Produit Produit { get; set; }
    }
}
