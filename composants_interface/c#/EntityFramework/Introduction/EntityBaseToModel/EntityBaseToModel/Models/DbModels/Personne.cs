using System;
using System.Collections.Generic;

#nullable disable

namespace EntityBaseToModel.Models.DbModels
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
