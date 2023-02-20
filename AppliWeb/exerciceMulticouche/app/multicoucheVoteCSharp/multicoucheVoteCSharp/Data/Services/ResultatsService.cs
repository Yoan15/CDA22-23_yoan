using multicoucheVoteCSharp.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data.Services
{
    public class ResultatsService
    {
        public readonly MyDbContext _context;

        public ResultatsService(MyDbContext context)
        {
            _context = context;
        }

        public IEnumerable<Resultat> GetAllResultats()
        {
            return _context.Resultats.ToList();
        }
    }
}
