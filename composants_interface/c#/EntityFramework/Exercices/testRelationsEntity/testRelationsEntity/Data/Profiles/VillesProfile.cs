using AutoMapper;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Dtos;
using testRelationsEntity.Data.Models;

namespace testRelationsEntity.Data.Profiles
{
    public class VillesProfile: Profile
    {
        public VillesProfile()
        {
            //CreateMap<Ville, VillesInDTO>();
            CreateMap<Ville, VillesDTO>().ForMember(vD => vD.Pays, act => act.MapFrom(v => v.Pays)).ForMember(vD => vD.Codepostal, act => act.MapFrom(v => v.CodePostal));
            CreateMap<VillesDTO, Ville>();
        }
    }
}
