﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace testRelationsEntity.Data.Dtos
{
    public class VillesDTO
    {
        public int IdVille { get; set; }
        public string NomVille { get; set; }
        public PaysDTO Pays { get; set; }
    }

    //public class VillesDTOOther
    //{
    //    public int IdVille { get; set; }
    //    public string NomVille { get; set; }
    //}
}
