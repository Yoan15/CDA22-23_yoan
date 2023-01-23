using System;
using System.Collections.Generic;

#nullable disable

namespace ECF.Data.Models
{
    public partial class Musicien
    {
        public int IdMusicien { get; set; }
        public string Nom { get; set; }
        public string Prenom { get; set; }
        public string Instrument { get; set; }
        public int IdGroupe { get; set; }

        public virtual Groupe Groupe { get; set; }
    }
}
