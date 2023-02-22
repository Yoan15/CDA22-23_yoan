using AutoMapper;
using Microsoft.AspNetCore.Mvc;
using multicoucheVoteCSharp.Data.Dtos;
using multicoucheVoteCSharp.Data.Models;
using multicoucheVoteCSharp.Data.Services;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class CodesController: ControllerBase
    {
        private readonly CodesService _service;
        private readonly IMapper _mapper;

        public CodesController(CodesService service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        [HttpGet]
        public ActionResult<IEnumerable<CodesDTOout>> getAllCodes()
        {
            var listeCodes = _service.GetAllCodes();
            return Ok(_mapper.Map<IEnumerable<CodesDTOout>>(listeCodes));
        }

        [HttpGet("{id}", Name = "GetCodeById")]
        public ActionResult<CodesDTOout> GetCodeById(int id)
        {
            var commandItem = _service.GetCodeById(id);

            if (commandItem != null)
            {
                return Ok(_mapper.Map<CodesDTOout>(commandItem));
            }
            return NotFound();
        }

        [HttpPut("{id}")]
        public ActionResult UpdateCode(int id, Code obj)
        {
            var objFromRepo = _service.GetCodeById(id);
            if (objFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(obj, objFromRepo);
            _service.UpdateCode(objFromRepo);
            return NoContent();
        }


    }
}
