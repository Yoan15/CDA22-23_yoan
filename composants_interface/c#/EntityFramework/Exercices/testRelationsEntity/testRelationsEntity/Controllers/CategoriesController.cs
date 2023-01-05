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
    public class CategoriesController: ControllerBase
    {

        private readonly CategoriesServices _service;
        private readonly IMapper _mapper;

        public CategoriesController(CategoriesServices service, IMapper mapper)
        {
            _service = service;
            _mapper = mapper;
        }

        [HttpGet]
        public ActionResult<IEnumerable<CategoriesDTO>> GetAllCategories()
        {
            var listeCategories = _service.GetAllCategories();
            return Ok(_mapper.Map<IEnumerable<CategoriesDTO>>(listeCategories));
        }

        [HttpGet("{id}", Name = "GetCategoriesById")]
        public ActionResult<CategoriesDTO> GetCategoriesById(int id)
        {
            var categorieItem = _service.GetCategorieById(id);
            if (categorieItem != null)
            {
                return Ok(_mapper.Map<CategoriesDTO>(categorieItem));
            }
            return NotFound();
        }

        [HttpPost]
        public ActionResult<CategoriesDTO> CreateCategories(Category categorie)
        {
            _service.AddCategorie(categorie);
            return CreatedAtRoute(nameof(GetCategoriesById), new { Id = categorie.IdCategorie }, categorie);
        }

        [HttpPut("{id}")]
        public ActionResult UpdateCategories(int id, Category categorie)
        {
            var categorieFromRepo = _service.GetCategorieById(id);
            if (categorieFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(categorie, categorieFromRepo);
            _service.UpdateCategorie(categorieFromRepo);
            return NoContent();
        }

        [HttpPatch("{id}")]
        public ActionResult PartialCategoriesUpdate(int id, JsonPatchDocument<Category> patchDoc)
        {
            var categorieFromRepo = _service.GetCategorieById(id);
            if (categorieFromRepo == null)
            {
                return NotFound();
            }

            var categorieToPatch = _mapper.Map<Category>(categorieFromRepo);
            patchDoc.ApplyTo(categorieToPatch, ModelState);

            if (!TryValidateModel(categorieToPatch))
            {
                return ValidationProblem(ModelState);
            }

            _mapper.Map(categorieToPatch, categorieFromRepo);
            _service.UpdateCategorie(categorieFromRepo);

            return NoContent();
        }

        [HttpDelete("{id}")]
        public ActionResult DeleteCategories(int id)
        {
            var categorieModelFromRepo = _service.GetCategorieById(id);
            if (categorieModelFromRepo == null)
            {
                return NotFound();
            }
            _service.DeleteCategorie(categorieModelFromRepo);
            return NoContent();
        }
    }
}
