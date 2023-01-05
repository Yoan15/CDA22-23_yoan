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
    public class CodepostalController: ControllerBase
    {

        private readonly CodepostalServices _service;
        private readonly IMapper _mapper;

        public CodepostalController(CodepostalServices service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        [HttpGet]
        public ActionResult<IEnumerable<CodepostalDTO>> GetAllCodepostals()
        {
            var listeCodepostals = _service.GetAllCodePostals();
            return Ok(_mapper.Map<IEnumerable<CodepostalDTO>>(listeCodepostals));
        }

        [HttpGet("{id}", Name = "GetCodepostalById")]
        public ActionResult<CodepostalDTO> GetCodepostalById(int id)
        {
            var codePostalItem = _service.GetCodePostalById(id);
            if (codePostalItem != null)
            {
                return Ok(_mapper.Map<CodepostalDTO>(codePostalItem));
            }
            return NotFound();
        }

        [HttpPost]
        public ActionResult<CodepostalDTO> CreateCodepostal(Codepostal codePostal)
        {
            _service.AddCodePostal(codePostal);
            return CreatedAtRoute(nameof(GetCodepostalById), new { Id = codePostal.IdCodePostal }, codePostal);
        }

        [HttpPut("{id}")]
        public ActionResult UpdateCodepostal(int id, Codepostal codePostal)
        {
            var codePostalFromRepo = _service.GetCodePostalById(id);
            if (codePostalFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(codePostal, codePostalFromRepo);
            _service.UpdateCodePostal(codePostalFromRepo);
            return NoContent();
        }

        [HttpPatch("{id}")]
        public ActionResult PartialCodepostalUpdate(int id, JsonPatchDocument<Codepostal> patchDoc)
        {
            var codePostalFromRepo = _service.GetCodePostalById(id);
            if (codePostalFromRepo == null)
            {
                return NotFound();
            }

            var codePostalToPatch = _mapper.Map<Codepostal>(codePostalFromRepo);
            patchDoc.ApplyTo(codePostalToPatch, ModelState);

            if (!TryValidateModel(codePostalToPatch))
            {
                return ValidationProblem(ModelState);
            }

            _mapper.Map(codePostalToPatch, codePostalFromRepo);
            _service.UpdateCodePostal(codePostalFromRepo);

            return NoContent();
        }

        [HttpDelete("{id}")]
        public ActionResult DeleteCodepostal(int id)
        {
            var codePostalModelFromRepo = _service.GetCodePostalById(id);
            if (codePostalModelFromRepo == null)
            {
                return NotFound();
            }
            _service.DeleteCodePostal(codePostalModelFromRepo);
            return NoContent();
        }
    }
}
