using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace testRelationsEntity.Data.Dtos
{
    public class VillesDTO
    {
        public string NomVille { get; set; }
        public virtual PaysDTO Pays { get; set; }

        public virtual CodepostalDTO Codepostal { get; set; }
    }

    public class VillesInDTO
    {
        public string NomVille { get; set; }

        public int IdPays { get; set; }

        public int IdCodePostal { get; set; }
    }
}
