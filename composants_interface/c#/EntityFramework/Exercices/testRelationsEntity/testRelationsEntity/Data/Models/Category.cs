using System;
using System.Collections.Generic;

#nullable disable

namespace testRelationsEntity.Data.Models
{
    public partial class Category
    {
        public Category()
        {
            Contients = new HashSet<Contient>();
        }

        public int IdCategorie { get; set; }
        public string NomCategorie { get; set; }

        public virtual ICollection<Contient> Contients { get; set; }
    }
}
