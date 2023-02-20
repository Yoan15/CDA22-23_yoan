using System;
using System.Collections.Generic;

#nullable disable

namespace multicoucheVoteCSharp.Data.Models
{
    public partial class Vote
    {
        public Vote()
        {
            Resultats = new HashSet<Resultat>();
        }

        public int IdVote { get; set; }
        public string Reponse { get; set; }
        public int IdCode { get; set; }

        public virtual Code IdCodeNavigation { get; set; }
        public virtual ICollection<Resultat> Resultats { get; set; }
    }
}
