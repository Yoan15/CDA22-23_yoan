using System;
using System.Collections.Generic;

#nullable disable

namespace testRelationsEntity.Data.Models
{
    public partial class Contient
    {
        public int IdContient { get; set; }
        public int? IdProduit { get; set; }
        public int? IdCategorie { get; set; }

        public virtual Category IdCategorieNavigation { get; set; }
        public virtual Produit IdProduitNavigation { get; set; }
    }
}
