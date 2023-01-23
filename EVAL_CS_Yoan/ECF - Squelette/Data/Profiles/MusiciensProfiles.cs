using AutoMapper;
using ECF.Data.Dtos;
using ECF.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ECF.Data.Profiles
{
    public class MusiciensProfiles:Profile
    {
        public MusiciensProfiles()
        {
            CreateMap<Musicien, MusiciensDTOIn>();
            CreateMap<MusiciensDTOIn, Musicien>();

            CreateMap<Musicien, MusiciensDTOOut>();
            CreateMap<MusiciensDTOOut, Musicien>();

            CreateMap<Musicien, MusiciensDTOOutAvecGroupe>().ForMember(c => c.NomDuGroupe, act => act.MapFrom(s => s.Groupe.NomDuGroupe));
            CreateMap<MusiciensDTOOutAvecGroupe, Musicien>();
        }
    }
}
