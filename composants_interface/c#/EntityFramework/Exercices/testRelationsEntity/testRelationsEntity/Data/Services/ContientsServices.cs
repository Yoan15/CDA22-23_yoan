using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Models;

namespace testRelationsEntity.Data.Services
{
    public class ContientsServices
    {

        private readonly MyDbContext _context;

        public ContientsServices(MyDbContext context)
        {
            _context = context;
        }

        public void AddContient(Contient c)
        {
            if (c == null)
            {
                throw new ArgumentNullException(nameof(c));
            }
            _context.Contients.Add(c);
            _context.SaveChanges();
        }

        public void DeleteContient(Contient c)
        {
            if (c == null)
            {
                throw new ArgumentNullException(nameof(c));
            }
            _context.Contients.Remove(c);
            _context.SaveChanges();
        }

        public IEnumerable<Contient> GetAllContients()
        {
            return _context.Contients.ToList();
        }

        public Contient GetContientById(int id)
        {
            return _context.Contients.FirstOrDefault(c => c.IdContient == id);
        }

        public void UpdateContient(Contient c)
        {
            if (c == null)
            {
                throw new ArgumentNullException(nameof(c));
            }
            _context.SaveChanges();
        }
    }
}
