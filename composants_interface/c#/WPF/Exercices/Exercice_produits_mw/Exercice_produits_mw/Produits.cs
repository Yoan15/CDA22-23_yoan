using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Text.Json;
using System.Threading.Tasks;

namespace Exercice_produits_mw
{
    public class Produits
    {
        public int IdProduit { get; set; }
        public string NomProduit { get; set; }
        public int Quantite { get; set; }

        public Produits(int idProduit, string nomProduit, int quantite)
        {
            IdProduit = idProduit;
            NomProduit = nomProduit;
            Quantite = quantite;
        }
    }
}
