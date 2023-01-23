using ECF.Data.Models;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ECF.Data.Services
{
    class GroupesServices
    {

        private readonly EcfContext _context;

        public GroupesServices(EcfContext context)
        {
            _context = context;
        }

        public void AddGroupe(Groupe groupe)
        {
            if (groupe == null)
            {
                throw new ArgumentNullException(nameof(groupe));
            }
            _context.Groupes.Add(groupe);
            _context.SaveChanges();
        }

        public void DeleteGroupe(Groupe groupe)
        {
            if (groupe == null)
            {
                throw new ArgumentNullException(nameof(groupe));
            }
            _context.Groupes.Remove(groupe);
            _context.SaveChanges();
        }

        public IEnumerable<Groupe> GetAllGroupes()
        {
            return _context.Groupes.ToList();
        }

        public Groupe GetGroupeById(int id)
        {
            return _context.Groupes.FirstOrDefault(groupe => groupe.IdGroupe == id);
        }

        public void UpdateGroupe(Groupe groupe)
        {
            if (groupe == null)
            {
                throw new ArgumentNullException(nameof(groupe));
            }
            _context.SaveChanges();
        }
    }
}
