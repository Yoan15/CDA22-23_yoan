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
    public class ProduitsController : ControllerBase
    {

        private readonly ProduitsServices _service;
        private readonly IMapper _mapper;

        public ProduitsController(ProduitsServices service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        [HttpGet]
        public ActionResult<IEnumerable<ProduitsDTO>> GetAllProduits()
        {
            var listeProduits = _service.GetAllProduits();
            return Ok(_mapper.Map<IEnumerable<ProduitsDTO>>(listeProduits));
        }

        [HttpGet("{id}", Name = "GetProduitsById")]
        public ActionResult<ProduitsDTO> GetProduitsById(int id)
        {
            var produitItem = _service.GetProduitById(id);
            if (produitItem != null)
            {
                return Ok(_mapper.Map<ProduitsDTO>(produitItem));
            }
            return NotFound();
        }

        [HttpPost]
        public ActionResult<ProduitsDTO> CreateProduits(Produit produit)
        {
            _service.AddProduit(produit);
            return CreatedAtRoute(nameof(GetProduitsById), new { Id = produit.IdProduit }, produit);
        }

        [HttpPut("{id}")]
        public ActionResult UpdateProduits(int id, Produit produit)
        {
            var produitFromRepo = _service.GetProduitById(id);
            if (produitFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(produit, produitFromRepo);
            _service.UpdateProduit(produitFromRepo);
            return NoContent();
        }

        [HttpPatch("{id}")]
        public ActionResult PartialProduitsUpdate(int id, JsonPatchDocument<Produit> patchDoc)
        {
            var produitFromRepo = _service.GetProduitById(id);
            if (produitFromRepo == null)
            {
                return NotFound();
            }

            var produitToPatch = _mapper.Map<Produit>(produitFromRepo);
            patchDoc.ApplyTo(produitToPatch, ModelState);

            if (!TryValidateModel(produitToPatch))
            {
                return ValidationProblem(ModelState);
            }

            _mapper.Map(produitToPatch, produitFromRepo);
            _service.UpdateProduit(produitFromRepo);

            return NoContent();
        }

        [HttpDelete("{id}")]
        public ActionResult DeleteProduits(int id)
        {
            var produitModelFromRepo = _service.GetProduitById(id);
            if (produitModelFromRepo == null)
            {
                return NotFound();
            }
            _service.DeleteProduit(produitModelFromRepo);
            return NoContent();
        }
    }
}
