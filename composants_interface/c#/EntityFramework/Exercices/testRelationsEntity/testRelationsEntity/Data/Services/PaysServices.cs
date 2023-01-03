using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Models;

namespace testRelationsEntity.Data.Services
{
    public class PaysServices
    {

        private readonly MyDbContext _context;

        public PaysServices(MyDbContext context)
        {
            _context = context;
        }

        public void AddPays(Pays p)
        {
            if (p == null)
            {
                throw new ArgumentNullException(nameof(p));
            }
            _context.Pays.Add(p);
            _context.SaveChanges();
        }

        public void DeletePays(Pays p)
        {
            if (p == null)
            {
                throw new ArgumentNullException(nameof(p));
            }
            _context.Pays.Remove(p);
            _context.SaveChanges();
        }

        public IEnumerable<Pays> GetAllPays()
        {
            return _context.Pays.ToList();
        }

        public Pays GetPaysById(int id)
        {
            return _context.Pays.FirstOrDefault(p => p.IdPays == id);
        }

        public void UpdatePays(Pays p)
        {
            if (p == null)
            {
                throw new ArgumentNullException(nameof(p));
            }
            _context.SaveChanges();
        }
    }
}
