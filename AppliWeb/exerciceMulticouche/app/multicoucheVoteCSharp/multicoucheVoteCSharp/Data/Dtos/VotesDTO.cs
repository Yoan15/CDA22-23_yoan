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

        //public CodesDTO Code { get; set; }
    }

    public class VotesDTOAvecCode
    {
        public string Reponse { get; set; }
        //public int IdCode { get; set; }
        public CodesDTOout Code { get; set; }

    }
}
