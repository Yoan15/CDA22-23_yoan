using System;
using System.Collections.Generic;

#nullable disable

namespace testRelationsEntity.Data.Models
{
    public partial class Ville
    {
        public int IdVille { get; set; }
        public string NomVille { get; set; }
        public int IdPays { get; set; }
        public int? IdCodePostal { get; set; }

        public virtual Codepostal CodePostal { get; set; }
        public virtual Pays Pays { get; set; }
    }
}
