using AutoMapper;
using Microsoft.AspNetCore.Mvc;
using multicoucheVoteCSharp.Data.Dtos;
using multicoucheVoteCSharp.Data.Services;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data.Controller
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
        public ActionResult<IEnumerable<CodesDTO>> getAllCodes()
        {
            var listeCodes = _service.GetAllCodes();
            return Ok(_mapper.Map<IEnumerable<CodesDTO>>(listeCodes));
        }

        [HttpGet("{id}", Name = "GetCodeById")]
        public ActionResult<CodesDTO> GetCodeById(int id)
        {
            var commandItem = _service.GetCodeById(id);

            if (commandItem != null)
            {
                return Ok(_mapper.Map<CodesDTO>(commandItem));
            }
            return NotFound();
        }


    }
}
