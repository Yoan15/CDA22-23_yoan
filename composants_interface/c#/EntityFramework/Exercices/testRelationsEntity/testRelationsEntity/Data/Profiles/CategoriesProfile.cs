using AutoMapper;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Dtos;
using testRelationsEntity.Data.Models;

namespace testRelationsEntity.Data.Profiles
{
    public class CategoriesProfile: Profile
    {
        public CategoriesProfile()
        {
            CreateMap<Category, CategoriesDTO>();
            CreateMap<CategoriesDTO, Category>();
        }
    }
}
