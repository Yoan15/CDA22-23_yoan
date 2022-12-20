using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;

#nullable disable

namespace EntityBaseToModelRetry.Models.DbModels
{
    public partial class test_entityframework_retryContext : DbContext
    {
        public test_entityframework_retryContext()
        {
        }

        public test_entityframework_retryContext(DbContextOptions<test_entityframework_retryContext> options)
            : base(options)
        {
        }

        public virtual DbSet<Produit> Produits { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
                optionsBuilder.UseMySQL("Name=Default");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Produit>(entity =>
            {
                entity.ToTable("produits");

                entity.Property(e => e.Id)
                    .HasColumnType("int(11)")
                    .HasColumnName("id");

                entity.Property(e => e.DescProduit)
                    .HasMaxLength(50)
                    .HasColumnName("descProduit");

                entity.Property(e => e.LibelleProduit)
                    .IsRequired()
                    .HasMaxLength(25)
                    .HasColumnName("libelleProduit");

                entity.Property(e => e.Quantite)
                    .HasColumnType("int(11)")
                    .HasColumnName("quantite");
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}
