using System;
using System.Collections.Generic;

#nullable disable

namespace multicoucheVoteCSharp.Data.Models
{
    public partial class Code
    {
        public int IdCode { get; set; }
        public string Code1 { get; set; }
        public bool Utilise { get; set; }

        public virtual Vote Vote { get; set; }
    }
}
