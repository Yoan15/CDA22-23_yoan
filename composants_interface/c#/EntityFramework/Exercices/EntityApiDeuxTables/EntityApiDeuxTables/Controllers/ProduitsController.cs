using AutoMapper;
using EntityApiDeuxTables.Data.Dtos;
using EntityApiDeuxTables.Data.Services;
using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityApiDeuxTables.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class ProduitsController:ControllerBase
    {
        private readonly ProduitsServices _service;
        private readonly IMapper _mapper;

        public ProduitsController(ProduitsServices service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        //GET toutes les catégories
        [HttpGet]
        public ActionResult<IEnumerable<ProduitsDTO>> getAllProduits()
        {
            var listeProduits = _service.GetAllProduits();
            return Ok(_mapper.Map<IEnumerable<ProduitsDTO>>(listeProduits));
        }


    }
}
