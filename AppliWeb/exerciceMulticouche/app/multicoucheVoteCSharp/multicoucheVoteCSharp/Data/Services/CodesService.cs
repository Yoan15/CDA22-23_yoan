using multicoucheVoteCSharp.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data.Services
{
    public class CodesService
    {
        private readonly MyDbContext _context;

        public CodesService(MyDbContext context)
        {
            _context = context;
        }

        public IEnumerable<Code> GetAllCodes()
        {
            return _context.Codes.ToList();
        }

        public Code GetCodeById(int id)
        {
            return _context.Codes.FirstOrDefault(c => c.IdCode == id);
        }

        public Code GetCodeByName(string nom)
        {
            return _context.Codes.FirstOrDefault(obj => obj.Code1 == nom);
        }

        public void UpdateCode(Code c)
        {
            if (c == null)
            {
                throw new ArgumentNullException(nameof(c));
            }
            _context.SaveChanges();
        }
    }
}
