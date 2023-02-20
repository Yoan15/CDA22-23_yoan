using AutoMapper;
using Microsoft.AspNetCore.Mvc;
using multicoucheVoteCSharp.Data.Services;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data.Controller
{
    [Route("api/[controller]")]
    [ApiController]
    public class ResultatsController: ControllerBase
    {
        private readonly ResultatsService _service;
        private readonly IMapper _mapper;

        public ResultatsController(ResultatsService service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        //GET
        [HttpGet]
        public ActionResult<IEnumerable<>>
    }
}
