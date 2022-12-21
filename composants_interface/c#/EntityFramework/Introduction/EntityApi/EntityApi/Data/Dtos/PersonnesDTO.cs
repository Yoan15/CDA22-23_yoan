using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityApi.Data.Dtos
{
    public class PersonnesDTO
    {
        public string Nom { get; set; }
        public string Prenom { get; set; }
        public int? CodePostal { get; set; }
        public string Adresse { get; set; }
        public string Ville { get; set; }
    }
}
