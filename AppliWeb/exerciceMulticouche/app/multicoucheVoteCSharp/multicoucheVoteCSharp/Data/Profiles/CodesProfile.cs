using AutoMapper;
using multicoucheVoteCSharp.Data.Dtos;
using multicoucheVoteCSharp.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data.Profiles
{
    public class CodesProfile: Profile
    {
        public CodesProfile()
        {
            CreateMap<Code, CodesDTOout>();
            CreateMap<CodesDTOout, Code>();
        }
    }
}
