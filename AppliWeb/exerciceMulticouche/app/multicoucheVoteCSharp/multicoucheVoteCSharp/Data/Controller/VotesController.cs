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
    public class VotesController: ControllerBase
    {
        private readonly VotesService _service;
        private readonly IMapper _mapper;

        public VotesController(VotesService service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        //GET api/votes
        [HttpGet]
        public ActionResult<IEnumerable<VotesDTO>> getAllVotes()
        {
            var listeVotes = _service.GetAllVotes();
            return Ok(_mapper.Map<IEnumerable<VotesDTO>>(listeVotes));
        }
    }
}
