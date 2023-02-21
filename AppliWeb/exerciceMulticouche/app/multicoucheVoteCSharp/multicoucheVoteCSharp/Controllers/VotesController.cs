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
        public ActionResult<IEnumerable<VotesDTOout>> getAllVotes()
        {
            var listeVotes = _service.GetAllVotes();
            return Ok(_mapper.Map<IEnumerable<VotesDTOout>>(listeVotes));
        }

        //GET api/Votes/{id}
        [HttpGet("{id}", Name = "GetVoteById")]
        public ActionResult<VotesDTOout> GetVoteById(int id)
        {
            var commandItem = _service.GetVoteById(id);
            
            if (commandItem != null)
            {
                
                return Ok(_mapper.Map<VotesDTOout>(commandItem));
            }
            return NotFound();
        }

        //POST api/Votes
        [HttpPost]
        public ActionResult<VotesDTOout> CreateVote(Vote vote)
        {
            var code = _serviceCode.GetCodeById(vote.IdCode);
            code.Utilise = true;
            _serviceCode.UpdateCode(code);
            _service.AddVotes(vote);
            return CreatedAtRoute(nameof(GetVoteById), new { Id = vote.IdVote }, vote);
        }
    }
}
