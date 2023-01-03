using System;
using System.Collections.Generic;

#nullable disable

namespace testRelationsEntity.Data.Models
{
    public partial class Pays
    {
        public Pays()
        {
            Villes = new HashSet<Ville>();
        }

        public int IdPays { get; set; }
        public string NomPays { get; set; }

        public virtual ICollection<Ville> Villes { get; set; }
    }
}
