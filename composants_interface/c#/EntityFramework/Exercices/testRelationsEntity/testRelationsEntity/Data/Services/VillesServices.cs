using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Models;

namespace testRelationsEntity.Data.Services
{
    public class VillesServices
    {

        private readonly MyDbContext _context;

        public VillesServices(MyDbContext context)
        {
            _context = context;
        }

        public void AddVille(Ville v)
        {
            if (v == null)
            {
                throw new ArgumentNullException(nameof(v));
            }
            _context.Villes.Add(v);
            _context.SaveChanges();
        }

        public void DeleteVille(Ville v)
        {
            if (v == null)
            {
                throw new ArgumentNullException(nameof(v));
            }
            _context.Villes.Remove(v);
            _context.SaveChanges();
        }

        public IEnumerable<Ville> GetAllVilles()
        {
            return _context.Villes.Include("Pays").ToList();
        }

        public Ville GetVilleById(int id)
        {
            return _context.Villes.FirstOrDefault(v => v.IdVille == id);
        }

        public void UpdateVille(Ville v)
        {
            if (v == null)
            {
                throw new ArgumentNullException(nameof(v));
            }
            _context.SaveChanges();
        }
    }
}
