using AutoMapper;
using EntityApi.Data.Dtos;
using EntityApi.Data.Models;
using EntityApi.Data.Services;
using Microsoft.AspNetCore.JsonPatch;
using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityApi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class PersonnesController:ControllerBase
    {
        private readonly PersonnesServices _service;
        private readonly IMapper _mapper;

        public PersonnesController(PersonnesServices service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        //GET api/personnes
        [HttpGet]
        public ActionResult<IEnumerable<PersonnesDTO>> getAllPersonnes()
        {
            var listePersonnes = _service.GetAllPersonnes();
            return Ok(_mapper.Map<IEnumerable<PersonnesDTO>>(listePersonnes));
        }

        //GET api/personnes/{id}
        [HttpGet("{id}", Name = "GetPersonneById")]
        public ActionResult<PersonnesDTO> GetPersonneById(int id)
        {
            var commandItem = _service.GetPersonneById(id);
            if (commandItem != null)
            {
                return Ok(_mapper.Map<PersonnesDTO>(commandItem));
            }
            return NotFound();
        }

        //POST api/personnes
        [HttpPost]
        public ActionResult<PersonnesDTO> CreatePersonne(Personne personne)
        {
            _service.AddPersonnes(personne);
            return CreatedAtRoute(nameof(GetPersonneById), new { Id = personne.Id }, personne);
        }

        //PUT api/personnes/{id}
        [HttpPut("{id}")]
        public ActionResult UpdatePersonne(int id, PersonnesDTO personne)
        {
            //pour trouver la personne a modifier on appelle la fonction GetPersonneById
            var personneFromRepo = _service.GetPersonneById(id);
            //si la variable personneFromRepo est vide, on renvoie NotFound()
            if (personneFromRepo == null)
            {
                return NotFound();
            }
            personneFromRepo.Dump();
            _mapper.Map(personne, personneFromRepo);
            personneFromRepo.Dump();
            //inutile mais gardé pour la cohérence
            _service.UpdatePersonne(personneFromRepo);
            return NoContent();
        }

        //PATCH api/personnes/{id}
        [HttpPatch("{id}")]
        public ActionResult PatchPersonne(int id, JsonPatchDocument<Personne> patchDoc)
        {
            var personneFromRepo = _service.GetPersonneById(id);
            if (personneFromRepo == null)
            {
                return NotFound();
            }

            var personneToPatch = _mapper.Map<Personne>(personneFromRepo);

            return NoContent();
        }
    }
}
