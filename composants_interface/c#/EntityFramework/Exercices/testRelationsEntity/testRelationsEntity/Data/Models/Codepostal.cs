using System;
using System.Collections.Generic;

#nullable disable

namespace testRelationsEntity.Data.Models
{
    public partial class Codepostal
    {
        public Codepostal()
        {
            Villes = new HashSet<Ville>();
        }

        public int IdCodePostal { get; set; }
        public int? NumCodePostal { get; set; }

        public virtual ICollection<Ville> Villes { get; set; }
    }
}
