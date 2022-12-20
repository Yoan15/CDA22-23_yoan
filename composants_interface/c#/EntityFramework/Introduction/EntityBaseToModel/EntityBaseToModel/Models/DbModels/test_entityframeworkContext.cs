using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;

#nullable disable

namespace EntityBaseToModel.Models.DbModels
{
    public partial class test_entityframeworkContext : DbContext
    {
        public test_entityframeworkContext()
        {
        }

        public test_entityframeworkContext(DbContextOptions<test_entityframeworkContext> options)
            : base(options)
        {
        }

        public virtual DbSet<Personne> Personnes { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
#warning To protect potentially sensitive information in your connection string, you should move it out of source code. You can avoid scaffolding the connection string by using the Name= syntax to read it from configuration - see https://go.microsoft.com/fwlink/?linkid=2131148. For more guidance on storing connection strings, see http://go.microsoft.com/fwlink/?LinkId=723263.
                optionsBuilder.UseMySQL("server=localhost;user=root;database=test_entityframework;port=3306;ssl mode=none");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Personne>(entity =>
            {
                entity.ToTable("personnes");

                entity.HasIndex(e => e.Prenom, "prenom_id");

                entity.Property(e => e.Id)
                    .HasColumnType("int(10) unsigned")
                    .HasColumnName("id");

                entity.Property(e => e.Adresse)
                    .IsRequired()
                    .HasMaxLength(50)
                    .HasColumnName("adresse");

                entity.Property(e => e.CodePostal)
                    .HasColumnType("int(11)")
                    .HasColumnName("codePostal");

                entity.Property(e => e.Nom)
                    .HasMaxLength(45)
                    .HasColumnName("nom");

                entity.Property(e => e.Prenom)
                    .HasMaxLength(20)
                    .HasColumnName("prenom");

                entity.Property(e => e.Ville)
                    .IsRequired()
                    .HasMaxLength(20)
                    .HasColumnName("ville");
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}
