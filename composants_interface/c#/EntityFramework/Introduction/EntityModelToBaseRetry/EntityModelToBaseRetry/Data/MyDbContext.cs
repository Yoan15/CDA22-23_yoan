using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityModelToBaseRetry.Data
{
    public class MyDbContext:DbContext
    {
        public DbSet<Produits> Produits { get; set; }

        public MyDbContext(DbContextOptions<MyDbContext> options):base(options)
        {

        }

        protected override void OnModele
    }
}
