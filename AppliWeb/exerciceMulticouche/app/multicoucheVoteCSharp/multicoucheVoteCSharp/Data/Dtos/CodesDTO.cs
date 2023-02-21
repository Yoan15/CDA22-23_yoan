using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data.Dtos
{
    public class CodesDTOout
    {
        public string Code1 { get; set; }
        public bool Utilise { get; set; }
    }

    public class CodesDTOAvecVotes
    {
        public string Code1 { get; set; }
        public bool Utilise { get; set; }
        public VotesDTOout Votes { get; set; }
    }
}
