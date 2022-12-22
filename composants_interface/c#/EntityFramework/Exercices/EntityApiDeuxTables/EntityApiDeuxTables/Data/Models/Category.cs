using System;
using System.Collections.Generic;

#nullable disable

namespace EntityApiDeuxTables.Data.Models
{
    public partial class Category
    {
        public int Id { get; set; }
        public string LibelleCategorie { get; set; }
        public ICollection<Produit> Produits { get; set; }
    }
}
