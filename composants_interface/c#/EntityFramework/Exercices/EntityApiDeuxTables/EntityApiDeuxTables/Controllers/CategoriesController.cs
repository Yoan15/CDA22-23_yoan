using AutoMapper;
using EntityApiDeuxTables.Data.Dtos;
using EntityApiDeuxTables.Data.Models;
using EntityApiDeuxTables.Data.Services;
using Microsoft.AspNetCore.JsonPatch;
using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityApiDeuxTables.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class CategoriesController:ControllerBase
    {
        private readonly CategoriesServices _service;
        private readonly IMapper _mapper;

        public CategoriesController(CategoriesServices service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        //GET toutes les catégories
        [HttpGet]
        public ActionResult<IEnumerable<CategoriesDTO>> getAllCategories()
        {
            var listeCategories = _service.GetAllCategories();
            return Ok(_mapper.Map<IEnumerable<CategoriesDTO>>(listeCategories));
        }

        //GET une seule catégorie
        [HttpGet("{id}", Name = "GetCategorieById")]
        public ActionResult<CategoriesDTO> GetCategorieById(int id)
        {
            var catItem = _service.GetCategoryById(id);
            if (catItem != null)
            {
                return Ok(_mapper.Map<CategoriesDTO>(catItem));
            }
            return NotFound();
        }

        //POST ajouter une catégorie à la BDD
        [HttpPost]
        public ActionResult<CategoriesDTO> CreateCategorie(Category cat)
        {
            _service.AddCategorie(cat);
            return CreatedAtAction(nameof(GetCategorieById), new { Id = cat.Id }, cat);
        }

        //PUT modification totale de la catégorie
        [HttpPut]
        public ActionResult UpdateCategorie(int id, CategoriesDTO cat)
        {
            var catFromRepo = _service.GetCategoryById(id);
            if (catFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(cat, catFromRepo);
            _service.UpdateCategorie(catFromRepo);
            return NoContent();
        }

        //PATCH modification PARTIEL de la catégorie
        [HttpPatch("{id}")]
        public ActionResult PartialCategorieUpdate(int id, JsonPatchDocument<Category>patchDoc)
        {
            var catFromRepo = _service.GetCategoryById(id);
            if (catFromRepo == null)
            {
                return NotFound();
            }
            var catToPatch = _mapper.Map<Category>(catFromRepo);
            //pour le patchDoc NE PAS OUBLIER d'intaller le NuGet "Microsoft.AspNetCore.JsonPatch" et ne pas oublier de mettre "JsonPatchDocument" en paramètre
            patchDoc.ApplyTo(catToPatch, ModelState);

            if (!TryValidateModel(catToPatch))
            {
                return ValidationProblem(ModelState);
            }
            _mapper.Map(catToPatch, catFromRepo);
            _service.UpdateCategorie(catFromRepo);
            return NoContent();
        }

        //DELETE suppression d'une catégorie
        [HttpDelete("{id}")]
        public ActionResult DeleteCategorie(int id)
        {
            var catFromRepo = _service.GetCategoryById(id);
            if (catFromRepo == null)
            {
                return NotFound();
            }
            _service.DeleteCategorie(catFromRepo);
            return NoContent();
        }
    }
}
