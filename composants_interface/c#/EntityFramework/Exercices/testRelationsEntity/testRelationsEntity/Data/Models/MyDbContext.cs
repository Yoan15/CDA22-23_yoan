using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;

#nullable disable

namespace testRelationsEntity.Data.Models
{
    public partial class MyDbContext : DbContext
    {
        public MyDbContext()
        {
        }

        public MyDbContext(DbContextOptions<MyDbContext> options)
            : base(options)
        {
        }

        public virtual DbSet<Category> Categories { get; set; }
        public virtual DbSet<Contient> Contients { get; set; }
        public virtual DbSet<Pays> Pays { get; set; }
        public virtual DbSet<Personne> Personnes { get; set; }
        public virtual DbSet<Produit> Produits { get; set; }
        public virtual DbSet<Ville> Villes { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
                optionsBuilder.UseMySQL("Name=Default");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Category>(entity =>
            {
                entity.HasKey(e => e.IdCategorie)
                    .HasName("PRIMARY");

                entity.ToTable("categories");

                entity.Property(e => e.IdCategorie)
                    .HasColumnType("int(11)")
                    .HasColumnName("idCategorie");

                entity.Property(e => e.NomCategorie)
                    .HasMaxLength(50)
                    .HasColumnName("nomCategorie");
            });

            modelBuilder.Entity<Contient>(entity =>
            {
                entity.HasKey(e => new { e.IdProduit, e.IdCategorie })
                    .HasName("PRIMARY");

                entity.ToTable("contient");

                entity.HasIndex(e => e.IdCategorie, "FK_contient_Categories");

                entity.Property(e => e.IdProduit)
                    .HasColumnType("int(11)")
                    .HasColumnName("idProduit");

                entity.Property(e => e.IdCategorie)
                    .HasColumnType("int(11)")
                    .HasColumnName("idCategorie");

                entity.HasOne(d => d.Categorie)
                    .WithMany(p => p.Contients)
                    .HasForeignKey(d => d.IdCategorie)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_contient_Categories");

                entity.HasOne(d => d.Produit)
                    .WithMany(p => p.Contients)
                    .HasForeignKey(d => d.IdProduit)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_contient_Produits");
            });

            modelBuilder.Entity<Pays>(entity =>
            {
                entity.HasKey(e => e.IdPays)
                    .HasName("PRIMARY");

                entity.ToTable("pays");

                entity.Property(e => e.IdPays)
                    .HasColumnType("int(11)")
                    .HasColumnName("idPays");

                entity.Property(e => e.NomPays)
                    .HasMaxLength(50)
                    .HasColumnName("nomPays");
            });

            modelBuilder.Entity<Personne>(entity =>
            {
                entity.HasKey(e => e.IdPersonne)
                    .HasName("PRIMARY");

                entity.ToTable("personnes");

                entity.Property(e => e.IdPersonne)
                    .HasColumnType("int(11)")
                    .HasColumnName("idPersonne");

                entity.Property(e => e.NomPersonne)
                    .HasMaxLength(50)
                    .HasColumnName("nomPersonne");

                entity.Property(e => e.PrenomPersonne)
                    .HasMaxLength(50)
                    .HasColumnName("prenomPersonne");
            });

            modelBuilder.Entity<Produit>(entity =>
            {
                entity.HasKey(e => e.IdProduit)
                    .HasName("PRIMARY");

                entity.ToTable("produits");

                entity.Property(e => e.IdProduit)
                    .HasColumnType("int(11)")
                    .HasColumnName("idProduit");

                entity.Property(e => e.LibelleProduit)
                    .HasMaxLength(50)
                    .HasColumnName("libelleProduit");

                entity.Property(e => e.QuantiteProduit)
                    .HasColumnType("int(11)")
                    .HasColumnName("quantiteProduit");
            });

            modelBuilder.Entity<Ville>(entity =>
            {
                entity.HasKey(e => e.IdVille)
                    .HasName("PRIMARY");

                entity.ToTable("villes");

                entity.HasIndex(e => e.IdPays, "FK_Villes_Pays");

                entity.Property(e => e.IdVille)
                    .HasColumnType("int(11)")
                    .HasColumnName("idVille");

                entity.Property(e => e.IdPays)
                    .HasColumnType("int(11)")
                    .HasColumnName("idPays");

                entity.Property(e => e.NomVille)
                    .HasMaxLength(50)
                    .HasColumnName("nomVille");

                entity.HasOne(d => d.Pays)
                    .WithMany(p => p.Villes)
                    .HasForeignKey(d => d.IdPays)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_Villes_Pays");
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}
