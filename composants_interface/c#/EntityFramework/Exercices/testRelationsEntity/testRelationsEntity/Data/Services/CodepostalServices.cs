using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Models;

namespace testRelationsEntity.Data.Services
{
    public class CodepostalServices
    {

        private readonly MyDbContext _context;

        public CodepostalServices(MyDbContext context)
        {
            _context = context;
        }

        public void AddCodePostal(Codepostal cp)
        {
            if (cp == null)
            {
                throw new ArgumentNullException(nameof(cp));
            }
            _context.Codepostal.Add(cp);
            _context.SaveChanges();
        }

        public void DeleteCodePostal(Codepostal cp)
        {
            if (cp == null)
            {
                throw new ArgumentNullException(nameof(cp));
            }
            _context.Codepostal.Remove(cp);
            _context.SaveChanges();
        }

        public IEnumerable<Codepostal> GetAllCodePostals()
        {
            return _context.Codepostal.ToList();
        }

        public Codepostal GetCodePostalById(int id)
        {
            return _context.Codepostal.FirstOrDefault(cp => cp.IdCodePostal == id);
        }

        public void UpdateCodePostal(Codepostal cp)
        {
            if (cp == null)
            {
                throw new ArgumentNullException(nameof(cp));
            }
            _context.SaveChanges();
        }
    }
}
