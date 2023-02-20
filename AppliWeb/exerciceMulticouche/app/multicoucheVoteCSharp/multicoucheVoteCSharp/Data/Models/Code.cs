using System;
using System.Collections.Generic;

#nullable disable

namespace multicoucheVoteCSharp.Data.Models
{
    public partial class Code
    {
        public Code()
        {
            Votes = new HashSet<Vote>();
        }

        public int IdCode { get; set; }
        public string Code1 { get; set; }
        public bool Utilise { get; set; }

        public virtual ICollection<Vote> Votes { get; set; }
    }
}
