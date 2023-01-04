using AutoMapper;
using Microsoft.AspNetCore.JsonPatch;
using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Dtos;
using testRelationsEntity.Data.Models;
using testRelationsEntity.Data.Services;

namespace testRelationsEntity.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class PersonnesController : ControllerBase
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
            var listePersonne = _service.GetAllPersonnes();
            return Ok(_mapper.Map<IEnumerable<PersonnesDTO>>(listePersonne));
        }

        //GET api/personnes/{id}
        [HttpGet("{id}", Name = "GetPersonneById")]
        public ActionResult<PersonnesDTO> GetPersonneById(int id)
        {
            var personneItem = _service.GetPersonneById(id);
            if (personneItem != null)
            {
                return Ok(_mapper.Map<PersonnesDTO>(personneItem));
            }
            return NotFound();
        }

        //POST api/personnes
        [HttpPost]
        public ActionResult<PersonnesDTO> CreatePersonne(Personne personne)
        {
            _service.AddPersonne(personne);
            return CreatedAtRoute(nameof(GetPersonneById), new { Id = personne.IdPersonne }, personne);
        }

        //PUT api/personnes
        [HttpPut("{id}")]
        public ActionResult UpdatePersonne(int id, PersonnesDTO personne)
        {
            var personneFromRepo = _service.GetPersonneById(id);
            if (personneFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(personne, personneFromRepo);
            _service.UpdatePersonne(personneFromRepo);
            return NoContent();
        }

        //Exemple appel PATCH:
        //    [{"op": "replace",
        //      "path": "prenomPersonne",
        //      "value": "test"
        //    }]
        //PATCH api/personnes
        [HttpPatch("{id}")]
        public ActionResult UpdatePartialPersonne(int id, JsonPatchDocument<Personne> patchDoc)
        {
            var personneFromRepo = _service.GetPersonneById(id);
            if (personneFromRepo == null)
            {
                return NotFound();
            }
            var personneToPatch = _mapper.Map<Personne>(personneFromRepo);
            patchDoc.ApplyTo(personneToPatch, ModelState);
            if (!TryValidateModel(personneToPatch))
            {
                return ValidationProblem(ModelState);
            }
            _mapper.Map(personneToPatch, personneFromRepo);
            _service.UpdatePersonne(personneFromRepo);
            return NoContent();
        }

        //DELETE api/personnes
        [HttpDelete("{id}")]
        public ActionResult DeletePersonne(int id)
        {
            var personneFromRepo = _service.GetPersonneById(id);
            if (personneFromRepo == null)
            {
                return NotFound();
            }
            _service.DeletePersonne(personneFromRepo);
            return NoContent();
        }
    }
}
