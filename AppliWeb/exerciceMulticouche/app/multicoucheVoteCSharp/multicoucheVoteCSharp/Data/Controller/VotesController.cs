using AutoMapper;
using Microsoft.AspNetCore.Mvc;
using multicoucheVoteCSharp.Data.Dtos;
using multicoucheVoteCSharp.Data.Models;
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
        private readonly CodesService _serviceCode;
        private readonly IMapper _mapper;

        public VotesController(VotesService service, IMapper mapper, CodesService serviceCode)
        {
            _service = service;
            _serviceCode = serviceCode;
            _mapper = mapper;
        }

        //GET api/votes
        [HttpGet]
        public ActionResult<IEnumerable<VotesDTO>> getAllVotes()
        {
            var listeVotes = _service.GetAllVotes();
            return Ok(_mapper.Map<IEnumerable<VotesDTO>>(listeVotes));
        }

        //GET api/Votes/{id}
        [HttpGet("{id}", Name = "GetVoteById")]
        public ActionResult<VotesDTO> GetVoteById(int id)
        {
            var commandItem = _service.GetVoteById(id);
            var code = _serviceCode.GetCodeById(commandItem.IdCode);
            if (commandItem != null)
            {
                code.Utilise = true;
                _serviceCode.UpdateCode(code);
                return Ok(_mapper.Map<VotesDTO>(commandItem));
            }
            return NotFound();
        }

        //POST api/Votes
        [HttpPost]
        public ActionResult<VotesDTO> CreateVote(Vote vote)
        {
            _service.AddVotes(vote);
            return CreatedAtRoute(nameof(GetVoteById), new { Id = vote.IdVote }, vote);
        }
    }
}
