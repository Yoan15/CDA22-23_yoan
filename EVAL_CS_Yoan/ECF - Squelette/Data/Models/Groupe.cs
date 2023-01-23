using System;
using System.Collections.Generic;

#nullable disable

namespace ECF.Data.Models
{
    public partial class Groupe
    {
        public Groupe()
        {
            ListeMusiciens = new HashSet<Musicien>();
        }

        public int IdGroupe { get; set; }
        public string NomDuGroupe { get; set; }
        public int NombreDeFollowers { get; set; }
        public string Logo { get; set; }

        public virtual ICollection<Musicien> ListeMusiciens { get; set; }
    }
}
