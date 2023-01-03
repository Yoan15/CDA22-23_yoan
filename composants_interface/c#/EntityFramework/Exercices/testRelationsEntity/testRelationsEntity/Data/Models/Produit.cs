using System;
using System.Collections.Generic;

#nullable disable

namespace testRelationsEntity.Data.Models
{
    public partial class Produit
    {
        public Produit()
        {
            Contients = new HashSet<Contient>();
        }

        public int IdProduit { get; set; }
        public string LibelleProduit { get; set; }
        public int? QuantiteProduit { get; set; }

        public virtual ICollection<Contient> Contients { get; set; }
    }
}
