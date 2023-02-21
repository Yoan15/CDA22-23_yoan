using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata;
using multicoucheVoteCSharp.Data.Models;

#nullable disable

namespace multicoucheVoteCSharp.Data
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

        public virtual DbSet<Code> Codes { get; set; }
        public virtual DbSet<Resultat> Resultats { get; set; }
        public virtual DbSet<Vote> Votes { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            if (!optionsBuilder.IsConfigured)
            {
                optionsBuilder.UseMySQL("Name=Default");
            }
        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Code>(entity =>
            {
                entity.HasKey(e => e.IdCode)
                    .HasName("PRIMARY");

                entity.ToTable("codes");

                entity.HasIndex(e => e.Code1, "code")
                    .IsUnique();

                entity.Property(e => e.IdCode)
                    .HasColumnType("int(11)")
                    .HasColumnName("idCode");

                entity.Property(e => e.Code1)
                    .HasMaxLength(30)
                    .HasColumnName("code");

                entity.Property(e => e.Utilise).HasColumnName("utilise");
            });

            modelBuilder.Entity<Resultat>(entity =>
            {
                entity.HasKey(e => e.IdResultat)
                    .HasName("PRIMARY");

                entity.ToTable("resultats");

                entity.Property(e => e.IdResultat)
                    .HasColumnType("int(11)")
                    .HasColumnName("idResultat");

                entity.Property(e => e.NbVotes)
                    .HasColumnType("int(11)")
                    .HasColumnName("nbVotes");

                entity.Property(e => e.Reponse)
                    .HasMaxLength(50)
                    .HasColumnName("reponse");
            });

            modelBuilder.Entity<Vote>(entity =>
            {
                entity.HasKey(e => e.IdVote)
                    .HasName("PRIMARY");

                entity.ToTable("votes");

                entity.HasIndex(e => e.IdCode, "idCode")
                    .IsUnique();

                entity.Property(e => e.IdVote)
                    .HasColumnType("int(11)")
                    .HasColumnName("idVote");

                entity.Property(e => e.IdCode)
                    .HasColumnType("int(11)")
                    .HasColumnName("idCode");

                entity.Property(e => e.Reponse)
                    .IsRequired()
                    .HasMaxLength(50)
                    .HasColumnName("reponse");

                entity.HasOne(d => d.Code)
                    .WithOne(p => p.Vote)
                    .HasForeignKey<Vote>(d => d.IdCode)
                    .OnDelete(DeleteBehavior.ClientSetNull)
                    .HasConstraintName("FK_Votes_Codes");
            });

            OnModelCreatingPartial(modelBuilder);
        }

        partial void OnModelCreatingPartial(ModelBuilder modelBuilder);
    }
}
