﻿using AutoMapper;
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
    public class PaysController: ControllerBase
    {
        private readonly PaysServices _service;
        private readonly IMapper _mapper;

        public PaysController(PaysServices service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        //GET api/pays
        [HttpGet]
        public ActionResult<IEnumerable<PaysDTO>> getAllPays()
        {
            var listePays = _service.GetAllPays();
            return Ok(_mapper.Map<IEnumerable<PaysDTO>>(listePays));
        }

        //GET api/pays/{id}
        [HttpGet("{id}", Name = "GetPaysById")]
        public ActionResult<PaysDTO> GetPaysById(int id)
        {
            var paysItem = _service.GetPaysById(id);
            if (paysItem != null)
            {
                return Ok(_mapper.Map<PaysDTO>(paysItem));
            }
            return NotFound();
        }

        //POST api/pays
        [HttpPost]
        public ActionResult<PaysDTO> CreatePays(Pays pays)
        {
            _service.AddPays(pays);
            return CreatedAtRoute(nameof(GetPaysById), new { Id = pays.IdPays }, pays);

        }
    }
}
