using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using testRelationsEntity.Data.Models;

namespace testRelationsEntity.Data.Services
{
    public class CategoriesServices
    {

        private readonly MyDbContext _context;

        public CategoriesServices(MyDbContext context)
        {
            _context = context;
        }

        public void AddCategorie(Category c)
        {
            if (c == null)
            {
                throw new ArgumentNullException(nameof(c));
            }
            _context.Categories.Add(c);
            _context.SaveChanges();
        }

        public void DeleteCategorie(Category c)
        {
            if (c == null)
            {
                throw new ArgumentNullException(nameof(c));
            }
            _context.Categories.Remove(c);
            _context.SaveChanges();
        }

        public IEnumerable<Category> GetAllCategories()
        {
            return _context.Categories.ToList();
        }

        public Category GetCategorieById(int id)
        {
            return _context.Categories.FirstOrDefault(c => c.IdCategorie == id);
        }

        public void UpdateCategorie(Category c)
        {
            if (c == null)
            {
                throw new ArgumentNullException(nameof(c));
            }
            _context.SaveChanges();
        }
    }
}
