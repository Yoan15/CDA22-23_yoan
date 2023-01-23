using AutoMapper;
using ECF.Data;
using ECF.Data.Dtos;
using ECF.Data.Models;
using ECF.Data.Profiles;
using ECF.Data.Services;
using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ECF.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    class MusiciensController: ControllerBase
    {

        private readonly MusiciensServices _service;
        private readonly IMapper _mapper;

        public MusiciensController(EcfContext _context)
        {
            _service = new MusiciensServices(_context);
            var config = new MapperConfiguration(cfg =>
            {
                cfg.AddProfile<MusiciensProfiles>();
                cfg.AddProfile<GroupesProfiles>();
            });
            _mapper = config.CreateMapper();
        }

        [HttpGet]
        public IEnumerable<MusiciensDTOOut> GetAllMusiciens()
        {
            var listeMusiciens = _service.GetAllMusiciens();
            return _mapper.Map<IEnumerable<MusiciensDTOOut>>(listeMusiciens);
        }

        [HttpGet]
        public IEnumerable<MusiciensDTOOutAvecGroupe> GetAllMusiciensAvecGroupe()
        {
            IEnumerable<Musicien> listeMusiciens = _service.GetAllMusiciens();
            return _mapper.Map<IEnumerable<MusiciensDTOOutAvecGroupe>>(listeMusiciens);
        }

        [HttpGet("{id}", Name = "GetMusiciensById")]
        public MusiciensDTOOut GetMusicienById(int id)
        {
            var musicienItem = _service.GetMusicienById(id);
            if (musicienItem != null)
            {
                return _mapper.Map<MusiciensDTOOut>(musicienItem);
            }
            return null;
        }

        [HttpPost]
        public ActionResult<MusiciensDTOOut> CreateMusicien(MusiciensDTOIn musicienIn)
        {
            Musicien musicien = _mapper.Map<Musicien>(musicienIn);
            _service.AddMusicien(musicien);
            return CreatedAtRoute(nameof(GetMusicienById), new { Id = musicien.IdMusicien }, musicien);
        }

        [HttpPut("{id}")]
        public ActionResult UpdateMusicien(int id, MusiciensDTOIn musicien)
        {
            Musicien musicienFromRepo = _service.GetMusicienById(id);
            if (musicienFromRepo == null)
            {
                return NotFound();
            }
            _mapper.Map(musicien, musicienFromRepo);
            _service.UpdateMusicien(musicienFromRepo);
            return NoContent();
        }

        [HttpDelete("{id}")]
        public ActionResult DeleteMusicien(int id)
        {
            var musicienModelFromRepo = _service.GetMusicienById(id);
            if (musicienModelFromRepo == null)
            {
                return NotFound();
            }
            _service.DeleteMusicien(musicienModelFromRepo);
            return NoContent();
        }
    }
}
