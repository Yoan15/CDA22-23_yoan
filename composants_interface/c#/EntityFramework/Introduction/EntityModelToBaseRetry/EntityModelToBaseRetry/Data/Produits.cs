using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityModelToBaseRetry.Data
{
    public class Produits
    {
        public int Id { get; set; }
        public string Libelle { get; set; }
        public string Desc { get; set; }
        public int Prix { get; set; }
    }
}
