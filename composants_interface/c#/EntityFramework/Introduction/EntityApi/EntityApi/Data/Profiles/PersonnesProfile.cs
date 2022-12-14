using AutoMapper;
using EntityApi.Data.Dtos;
using EntityApi.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityApi.Data.Profiles
{
    public class PersonnesProfile:Profile
    {
        public PersonnesProfile()
        {
            CreateMap<Personne, PersonnesDTO>();
            CreateMap<PersonnesDTO, Personne>();
        }
    }
}
