using AutoMapper;
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
    public class ContientsController: ControllerBase
    {

        private readonly ContientsServices _service;
        private readonly IMapper _mapper;

        public ContientsController(ContientsServices service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        [HttpGet]
        public ActionResult<IEnumerable<ContientsDTO>> GetAllContients()
        {
            var listeContients = _service.GetAllContients();
            return Ok(_mapper.Map<IEnumerable<ContientsDTO>>(listeContients));
        }

        [HttpGet("{id}", Name = "GetContientsById")]
        public ActionResult<ContientsDTO> GetContientsById(int id, int id)
        {
            var contientItem = _service.GetContientById(id);
            if (contientItem != null)
            {
                return Ok(_mapper.Map<ContientsDTO>(contientItem));
            }
            return NotFound();
        }

        [HttpPost]
        public ActionResult<ContientsDTO> CreateContients(Contient contient)
        {
            _service.AddContient(contient);
            return CreatedAtRoute(nameof(GetContientsById), new { Id = contient.IdContients }, contient);
        }

        [HttpPut("{id}")]
        public ActionResult UpdateContients(int id, Contients contient)
        {
            var contientFromRepo = _service.GetContientsById(id);
            if (contientFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(contient, contientFromRepo);
            _service.UpdateContients(contientFromRepo);
            return NoContent();
        }

        [HttpPatch("{id}")]
        public ActionResult PartialContientsUpdate(int id, JsonPatchDocument<Contients> patchDoc)
        {
            var contientFromRepo = _service.GetContientsById(id);
            if (contientFromRepo == null)
            {
                return NotFound();
            }

            var contientToPatch = _mapper.Map<Contients>(contientFromRepo);
            patchDoc.ApplyTo(contientToPatch, ModelState);

            if (!TryValidateModel(contientToPatch))
            {
                return ValidationProblem(ModelState);
            }

            _mapper.Map(contientToPatch, contientFromRepo);
            _service.UpdateContients(contientFromRepo);

            return NoContent();
        }

        [HttpDelete("{id}")]
        public ActionResult DeleteContients(int id)
        {
            var contientModelFromRepo = _service.GetContientsById(id);
            if (contientModelFromRepo == null)
            {
                return NotFound();
            }
            _service.DeleteContients(contientModelFromRepo);
            return NoContent();
        }
    }
}
