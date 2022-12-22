using AutoMapper;
using EntityApiDeuxTables.Data.Dtos;
using EntityApiDeuxTables.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityApiDeuxTables.Data.Profiles
{
    public class ProduitsProfile:Profile
    {
        public ProduitsProfile()
        {
            CreateMap<Produit, ProduitsDTO>();
            CreateMap<ProduitsDTO, Produit>();
        }
    }
}
