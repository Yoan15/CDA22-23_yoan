﻿using AutoMapper;
using Microsoft.AspNetCore.Mvc;
using multicoucheVoteCSharp.Data;
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
        private readonly MyDbContext _context;
        private readonly IMapper _mapper;

        public VotesController(VotesService service, IMapper mapper, MyDbContext context)
        {
            _service = service;
            _mapper = mapper;
            _context = context;
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
        public void CreateVote(VotesDTOIn obj)
        {
            Vote vote = new Vote();
            CodesService codeServ = new CodesService(_context);
            var code = codeServ.GetCodeByName(obj.Code1);

            if (code.Utilise == false)
            {
                vote.IdCode = code.IdCode;
                vote.Reponse = obj.Reponse;

                _service.AddVotes(vote);

                code.Utilise = true;
                codeServ.UpdateCode(code);
            }
        }
    }
}
