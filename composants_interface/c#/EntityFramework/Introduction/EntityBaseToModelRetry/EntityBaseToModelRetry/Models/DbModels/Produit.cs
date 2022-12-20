using System;
using System.Collections.Generic;

#nullable disable

namespace EntityBaseToModelRetry.Models.DbModels
{
    public partial class Produit
    {
        public int Id { get; set; }
        public string LibelleProduit { get; set; }
        public string DescProduit { get; set; }
        public int Quantite { get; set; }
    }
}
