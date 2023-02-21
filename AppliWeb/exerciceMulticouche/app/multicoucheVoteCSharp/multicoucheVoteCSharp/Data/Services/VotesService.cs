using Microsoft.EntityFrameworkCore;
using multicoucheVoteCSharp.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data.Services
{
    public class VotesService
    {
        private readonly MyDbContext _context;

        public VotesService(MyDbContext context)
        {
            _context = context;
        }

        public void AddVotes(Vote v)
        {
            if (v == null)
            {
                throw new ArgumentNullException(nameof(v));
            }
            _context.Votes.Add(v);
            _context.SaveChanges();
        }

        public IEnumerable<Vote> GetAllVotes()
        {
            return _context.Votes.ToList();
        }

        public Vote GetVoteById(int id)
        {
            return _context.Votes.Include("Code").FirstOrDefault(v => v.IdVote == id);
        }
    }
}
