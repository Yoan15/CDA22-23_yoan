using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Models;

namespace testRelationsEntity.Data.Services
{
    public class ProduitsServices
    {

        private readonly MyDbContext _context;

        public ProduitsServices(MyDbContext context)
        {
            _context = context;
        }

        public void AddProduit(Produit p)
        {
            if (p == null)
            {
                throw new ArgumentNullException(nameof(p));
            }
            _context.Produits.Add(p);
            _context.SaveChanges();
        }

        public void DeleteProduit(Produit p)
        {
            if (p == null)
            {
                throw new ArgumentNullException(nameof(p));
            }
            _context.Produits.Remove(p);
            _context.SaveChanges();
        }

        public IEnumerable<Produit> GetAllProduits()
        {
            return _context.Produits.ToList();
        }

        public Produit GetProduitById(int id)
        {
            return _context.Produits.FirstOrDefault(p => p.IdProduit == id);
        }

        public void UpdateProduit(Produit p)
        {
            if (p == null)
            {
                throw new ArgumentNullException(nameof(p));
            }
            _context.SaveChanges();
        }
    }
}
