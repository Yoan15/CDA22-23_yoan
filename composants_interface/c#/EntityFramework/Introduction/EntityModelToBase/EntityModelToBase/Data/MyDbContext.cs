using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace EntityModelToBase.Data
{
    public class MyDbContext:DbContext
    {
        public DbSet<Personnes> Personnes { get; set; }
        public MyDbContext(DbContextOptions<MyDbContext> options):base(options)
        {

        }

        // 1ere façon de modifier les types générés
        //protected override void OnModelCreating(ModelBuilder modelBuilder)
        //{
        //    base.OnModelCreating(modelBuilder);
        //    modelBuilder.Entity<Personnes>(e => e.Property(o => o.Age).HasColumnType("tinyint(1)").HasConversion<short>());
        //}
         
    }
}
