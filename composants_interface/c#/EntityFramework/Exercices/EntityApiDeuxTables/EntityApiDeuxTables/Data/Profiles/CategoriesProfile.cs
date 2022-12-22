using AutoMapper;
using EntityApiDeuxTables.Data.Dtos;
using EntityApiDeuxTables.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityApiDeuxTables.Data.Profiles
{
    public class CategoriesProfile:Profile
    {
        public CategoriesProfile()
        {
            CreateMap<Category, CategoriesDTO>();
            CreateMap<CategoriesDTO, Category>();
        }
    }
}
