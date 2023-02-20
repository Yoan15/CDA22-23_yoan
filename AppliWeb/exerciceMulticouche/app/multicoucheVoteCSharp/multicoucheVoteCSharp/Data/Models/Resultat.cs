using System;
using System.Collections.Generic;

#nullable disable

namespace multicoucheVoteCSharp.Data.Models
{
    public partial class Resultat
    {
        public int IdResultat { get; set; }
        public int NbVotes { get; set; }
        public int IdVote { get; set; }

        public virtual Vote IdVoteNavigation { get; set; }
    }
}
