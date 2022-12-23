using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;

#nullable disable

namespace GestionStock.Models.DbModels
{
    public partial class gestionstockContext : DbContext
    {
        public gestionstockContext()
        {
        }

        public gestionstockContext(DbContextOptions<gestionstockContext> options)
            : base(options)
        {
        }

        public virtual DbSet<Article> Articles { get; set; }
        public virtual DbSet<Category> Categories { get; set; }
        public virtual DbSet<Typesproduit> Typesproduits { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
#warning To protect potentially sensitive information in your connection string, you should move it out of source code. You can avoid scaffolding the connection string by using the Name= syntax to read it from configuration - see https://go.microsoft.com/fwlink/?linkid=2131148. For more guidance on storing connection strings, see http://go.microsoft.com/fwlink/?LinkId=723263.
                optionsBuilder.UseMySQL("server=localhost;user=root;database=gestionstock;port=3306;ssl mode=none");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Article>(entity =>
            {
                entity.HasKey(e => e.IdArticle)
                    .HasName("PRIMARY");

                entity.ToTable("articles");

                entity.HasIndex(e => e.IdCategorie, "FK_articles_categories");

                entity.Property(e => e.IdArticle).HasColumnType("int(11)");

                entity.Property(e => e.IdCategorie).HasColumnType("int(11)");

                entity.Property(e => e.LibelleArticle).HasMaxLength(100);

                entity.Property(e => e.QuantiteStockee).HasColumnType("int(11)");

                entity.HasOne(d => d.IdCategorieNavigation)
                    .WithMany(p => p.Articles)
                    .HasForeignKey(d => d.IdCategorie)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_articles_categories");
            });

            modelBuilder.Entity<Category>(entity =>
            {
                entity.HasKey(e => e.IdCategorie)
                    .HasName("PRIMARY");

                entity.ToTable("categories");

                entity.HasIndex(e => e.IdTypeProduit, "FK_categories_typeproduits");

                entity.Property(e => e.IdCategorie).HasColumnType("int(11)");

                entity.Property(e => e.IdTypeProduit).HasColumnType("int(11)");

                entity.Property(e => e.LibelleCategorie).HasMaxLength(100);

                entity.HasOne(d => d.IdTypeProduitNavigation)
                    .WithMany(p => p.Categories)
                    .HasForeignKey(d => d.IdTypeProduit)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_categories_typeproduits");
            });

            modelBuilder.Entity<Typesproduit>(entity =>
            {
                entity.HasKey(e => e.IdTypeProduit)
                    .HasName("PRIMARY");

                entity.ToTable("typesproduits");

                entity.Property(e => e.IdTypeProduit).HasColumnType("int(11)");

                entity.Property(e => e.LibelleTypeProduit).HasMaxLength(100);
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}
