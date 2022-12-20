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

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            base.OnModelCreating(modelBuilder);
            modelBuilder.Entity<Produits>(e => e.Property(o => o.Libelle).HasColumnType("varchar(25)").HasConversion<string>());
            modelBuilder.Entity<Produits>(e => e.Property(o => o.Desc).HasColumnType("varchar(100)").HasConversion<string>());
        }
    }
}
