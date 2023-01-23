using ECF.Data.Models;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ECF.Data.Services
{
    class MusiciensServices
    {

        private readonly EcfContext _context;

        public MusiciensServices(EcfContext context)
        {
            _context = context;
        }

        public void AddMusicien(Musicien musicien)
        {
            if (musicien == null)
            {
                throw new ArgumentNullException(nameof(musicien));
            }
            _context.Musiciens.Add(musicien);
            _context.SaveChanges();
        }

        public void DeleteMusicien(Musicien musicien)
        {
            if (musicien == null)
            {
                throw new ArgumentNullException(nameof(musicien));
            }
            _context.Musiciens.Remove(musicien);
            _context.SaveChanges();
        }

        public IEnumerable<Musicien> GetAllMusiciens()
        {
            return _context.Musiciens.Include("Groupe").ToList();
        }

        public Musicien GetMusicienById(int id)
        {
            return _context.Musiciens.Include("Groupe").FirstOrDefault(musicien => musicien.IdMusicien == id);
        }

        public void UpdateMusicien(Musicien musicien)
        {
            if (musicien == null)
            {
                throw new ArgumentNullException(nameof(musicien));
            }
            _context.SaveChanges();
        }
    }
}
