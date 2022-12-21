using System;
using System.Collections.Generic;

#nullable disable

namespace EntityApi.Data.Models
{
    public partial class Personne
    {
        public int Id { get; set; }
        public string Nom { get; set; }
        public string Prenom { get; set; }
        public int? CodePostal { get; set; }
        public string Adresse { get; set; }
        public string Ville { get; set; }
    }
}
