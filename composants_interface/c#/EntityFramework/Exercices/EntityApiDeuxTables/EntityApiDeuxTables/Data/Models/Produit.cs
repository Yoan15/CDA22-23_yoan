using System;
using System.Collections.Generic;

#nullable disable

namespace EntityApiDeuxTables.Data.Models
{
    public partial class Produit
    {
        public int Id { get; set; }
        public string LibelleProduit { get; set; }
        public int Qte { get; set; }
        public int? IdCategorie { get; set; }
        public Category Categorie { get; set; }
    }
}
