using EntityApiDeuxTables.Data.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityApiDeuxTables.Data.Services
{
    public class CategoriesServices
    {
        private readonly MyDbContext _context;
        public CategoriesServices(MyDbContext context)
        {
            _context = context;
        }

        public void AddCategorie(Category cat)
        {
            if (cat == null)
            {
                throw new ArgumentNullException(nameof(cat));
            }
            _context.Add(cat);
            _context.SaveChanges();
        }

        public void DeleteCategorie(Category cat)
        {
            if (cat == null)
            {
                throw new ArgumentNullException(nameof(cat));
            }

            _context.Categorie.Remove(cat);
            _context.SaveChanges();
        }

        public IEnumerable<Category> GetAllCategories()
        {
            return _context.Categorie.ToList();
        }

        public Category GetCategoryById(int id)
        {
            return _context.Categorie.FirstOrDefault(cat => cat.Id == id);
        }

        public void UpdateCategorie(Category cat)
        {
            if (cat == null)
            {
                throw new ArgumentNullException(nameof(cat));
            }
            _context.SaveChanges();
        }
    }
}
