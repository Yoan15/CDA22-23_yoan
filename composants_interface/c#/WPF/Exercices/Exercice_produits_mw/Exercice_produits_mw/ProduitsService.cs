﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Exercice_produits_mw
{
    class ProduitsService
    {

        static string filename = @"U:\59011-14-05\composants_interface\c#\WPF\Exercices\Exercice_produits_mw\Exercice_produits_mw\produits.txt";
        static public List<Produits> ListeProduits()
        {
            Produits produits;
            List<Produits> liste = new List<Produits>();
            Fichier fichier = new Fichier();
            List<string[]> tab = new List<string[]>();
            tab = fichier.ReadFile(filename);
            foreach (var item in tab)
            {
                produits = new Produits(Int32.Parse(item[0]), item[1], Int32.Parse(item[2]));
                liste.Add(produits);
            }

            return liste;
        }

        static public void ModifProduit(Produits produits)
        {
            List<Produits> liste = ListeProduits();
            List<string[]> tab = new List<string[]>();
            Fichier fichier = new Fichier();

            foreach (var item in liste)
            {
                if (item.IdProduit == produits.IdProduit)
                {
                    item.NomProduit = produits.NomProduit;
                    item.Quantite = produits.Quantite;
                }
            }

            foreach (var item in liste)
            {
                string[] ligne = { item.IdProduit.ToString(), item.NomProduit, item.Quantite.ToString() };
                tab.Add(ligne);
            }
            fichier.WriteFile(tab, filename);
        }
    }
}