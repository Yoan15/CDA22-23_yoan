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
            CreateMap<Ville, VillesDTO>();
            //CreateMap<Ville, VillesDTO>().ForMember(vD => vD.IdPays, act => act.MapFrom(v => v.Pays.IdPays));
            CreateMap<VillesDTO, Ville>();
        }
    }
}
