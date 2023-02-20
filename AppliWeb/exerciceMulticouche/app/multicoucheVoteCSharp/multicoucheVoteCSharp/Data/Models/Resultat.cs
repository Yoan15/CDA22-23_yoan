using System;
using System.Collections.Generic;

#nullable disable

namespace multicoucheVoteCSharp.Data.Models
{
    public partial class Resultat
    {
        public int IdResultat { get; set; }
        public string Reponse { get; set; }
        public int NbVotes { get; set; }
    }
}
