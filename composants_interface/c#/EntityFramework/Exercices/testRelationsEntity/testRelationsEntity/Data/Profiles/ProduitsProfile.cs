using AutoMapper;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Dtos;
using testRelationsEntity.Data.Models;

namespace testRelationsEntity.Data.Profiles
{
    public class ProduitsProfile: Profile
    {
        public ProduitsProfile()
        {
            CreateMap<Produit, ProduitsDTO>();
            CreateMap<ProduitsDTO, Produit>();
        }
    }
}
