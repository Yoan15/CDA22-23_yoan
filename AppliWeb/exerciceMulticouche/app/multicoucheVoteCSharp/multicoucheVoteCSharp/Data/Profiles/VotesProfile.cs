using AutoMapper;
using multicoucheVoteCSharp.Data.Dtos;
using multicoucheVoteCSharp.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data.Profiles
{
    public class VotesProfile: Profile
    {
        public VotesProfile()
        {
            CreateMap<Vote, VotesDTOout>();
            //CreateMap<Vote, VotesDTOAvecCode>().ForMember(vD => vD.Code, act => act.MapFrom(v => v.Code));
            CreateMap<VotesDTOout, Vote>();
        }
    }
}
