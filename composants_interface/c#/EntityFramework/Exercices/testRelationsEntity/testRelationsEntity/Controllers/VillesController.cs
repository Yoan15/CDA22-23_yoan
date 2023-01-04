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
    public class VillesController: ControllerBase
    {

        private readonly VillesServices _service;
        private readonly IMapper _mapper;

        public VillesController(VillesServices service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        [HttpGet]
        public ActionResult<IEnumerable<VillesDTO>> GetAllVilles()
        {
            var listeVilles = _service.GetAllVilles();
            return Ok(_mapper.Map<IEnumerable<VillesDTO>>(listeVilles));
        }

        [HttpGet("{id}", Name = "GetVilleById")]
        public ActionResult<VillesDTO> GetVilleById(int id)
        {
            var villeItem = _service.GetVilleById(id);
            if (villeItem != null)
            {
                return Ok(_mapper.Map<VillesDTO>(villeItem));
            }
            return NotFound();
        }

        [HttpPost]
        public ActionResult<VillesInDTO> CreateVille(Ville ville)
        {
            _service.AddVille(ville);
            return CreatedAtRoute(nameof(GetVilleById), new { Id = ville.IdVille }, ville);
        }

        [HttpPut("{id}")]
        public ActionResult UpdateVille(int id, Ville ville)
        {
            var villeFromRepo = _service.GetVilleById(id);
            if (villeFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(ville, villeFromRepo);
            _service.UpdateVille(villeFromRepo);
            return NoContent();
        }

        [HttpPatch("{id}")]
        public ActionResult PartialVilleUpdate(int id, JsonPatchDocument<Ville> patchDoc)
        {
            var villeFromRepo = _service.GetVilleById(id);
            if (villeFromRepo == null)
            {
                return NotFound();
            }

            var villeToPatch = _mapper.Map<Ville>(villeFromRepo);
            patchDoc.ApplyTo(villeToPatch, ModelState);

            if (!TryValidateModel(villeToPatch))
            {
                return ValidationProblem(ModelState);
            }

            _mapper.Map(villeToPatch, villeFromRepo);
            _service.UpdateVille(villeFromRepo);

            return NoContent();
        }

        [HttpDelete("{id}")]
        public ActionResult DeleteVille(int id)
        {
            var villeModelFromRepo = _service.GetVilleById(id);
            if (villeModelFromRepo == null)
            {
                return NotFound();
            }
            _service.DeleteVille(villeModelFromRepo);
            return NoContent();
        }
    }
}
