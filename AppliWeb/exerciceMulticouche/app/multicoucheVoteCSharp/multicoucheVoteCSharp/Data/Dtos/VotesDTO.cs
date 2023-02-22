using multicoucheVoteCSharp.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data.Dtos
{
    public class VotesDTOout
    {
        public string Reponse { get; set; }
        public int IdCode { get; set; }
    }

    public class VotesDTOAvecCode
    {
        public string Reponse { get; set; }
        public CodesDTOout Code1 { get; set; }

    }

    public class VotesDTOIn
    {
        public string Reponse { get; set; }

        public string Code1 { get; set; }
    }
}
