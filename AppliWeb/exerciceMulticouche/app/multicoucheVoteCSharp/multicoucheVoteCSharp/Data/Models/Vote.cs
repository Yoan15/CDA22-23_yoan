using System;
using System.Collections.Generic;

#nullable disable

namespace multicoucheVoteCSharp.Data.Models
{
    public partial class Vote
    {
        public int IdVote { get; set; }
        public string Reponse { get; set; }
        public int IdCode { get; set; }

        public virtual Code Code { get; set; }
    }
}
