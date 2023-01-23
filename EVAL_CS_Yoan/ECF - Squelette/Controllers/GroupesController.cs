using AutoMapper;
using ECF.Data;
using ECF.Data.Dtos;
using ECF.Data.Models;
using ECF.Data.Profiles;
using ECF.Data.Services;
using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ECF.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    class GroupesController : ControllerBase
    {

        private readonly GroupesServices _service;
        private readonly IMapper _mapper;

        public GroupesController(EcfContext _context)
        {
            _service = new GroupesServices(_context);
            var config = new MapperConfiguration(cfg =>
            {
                cfg.AddProfile<GroupesProfiles>();
                cfg.AddProfile<MusiciensProfiles>();
            });
            _mapper = config.CreateMapper();
        }

        [HttpGet]
        public IEnumerable<GroupesDTOOut> GetAllGroupes()
        {
            var listeGroupes = _service.GetAllGroupes();
            return _mapper.Map<IEnumerable<GroupesDTOOut>>(listeGroupes);
        }

        [HttpGet]
        public IEnumerable<GroupesDTOOutAvecMusiciens> GetAllGroupesAvecMusiciens()
        {
            var listeGroupes = _service.GetAllGroupes();
            return _mapper.Map<IEnumerable<GroupesDTOOutAvecMusiciens>>(listeGroupes);
        }

        [HttpGet("{id}", Name = "GetGroupesById")]
        public ActionResult<GroupesDTOOut> GetGroupeById(int id)
        {
            var groupeItem = _service.GetGroupeById(id);
            if (groupeItem != null)
            {
                return Ok(_mapper.Map<GroupesDTOOut>(groupeItem));
            }
            return NotFound();
        }

        [HttpPost]
        public ActionResult<GroupesDTOIn> CreateGroupe(Groupe groupe)
        {
            _service.AddGroupe(groupe);
            return CreatedAtRoute(nameof(GetGroupeById), new { Id = groupe.IdGroupe }, groupe);
        }

        [HttpPut("{id}")]
        public ActionResult UpdateGroupe(int id, Groupe groupe)
        {
            var groupeFromRepo = _service.GetGroupeById(id);
            if (groupeFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(groupe, groupeFromRepo);
            _service.UpdateGroupe(groupeFromRepo);
            return NoContent();
        }


        [HttpDelete("{id}")]
        public ActionResult DeleteGroupe(int id)
        {
            var groupeModelFromRepo = _service.GetGroupeById(id);
            if (groupeModelFromRepo == null)
            {
                return NotFound();
            }
            _service.DeleteGroupe(groupeModelFromRepo);
            return NoContent();
        }
    }
}

