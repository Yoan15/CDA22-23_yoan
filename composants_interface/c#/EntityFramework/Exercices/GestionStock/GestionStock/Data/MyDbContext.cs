using GestionStock.Models.DbModels;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace GestionStock
{
    class MyDbContext:DbContext
    {
        public DbSet<Article> Articles { get; set; }
        public DbSet<Category> Categories { get; set; }
        public DbSet<Typesproduit> TypesProduits { get; set; }
        public MyDbContext(DbContextOptions<MyDbContext> options):base(options)
        {

        }
    }
}
