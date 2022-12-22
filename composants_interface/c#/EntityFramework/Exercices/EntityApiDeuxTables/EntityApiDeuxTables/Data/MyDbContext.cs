using EntityApiDeuxTables.Data.Models;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityApiDeuxTables.Data
{
    public class MyDbContext:DbContext
    {
        public DbSet<Produit> Produit { get; set; }
        public DbSet<Category> Categories { get; set; }
        public MyDbContext(DbContextOptions<MyDbContext> options):base(options)
        {

        }
    }
}
