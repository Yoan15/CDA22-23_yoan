using CRUDProduits;
using System;
using System.Collections.Generic;
namespace CRUDProduits
{
    class ProduitsService
    {

        //Attributs
        static string path = @"../../Produits.json";

        // methode qui extrait les produits du fichier
        static public List<Produits> ListProduits()
        {
            List<Produits> liste = DAOJson.LireFichier(path);
            return liste;
        }
        // methode qui met à jour le fichier avec les produits 
        static public void SaveProduits(List<Produits> liste)
        {
            DAOJson.EcrireFichier(liste, path); //enregistrer fichier
        }

        static public Produits FindById(int idProduit)
        //Méthode qui permet de modifier un enregistrement
        {
            List<Produits> liste = ListProduits();
            // on recherche la position du produit dans la liste
            Produits p = liste.Find(r => r.IdProduit == idProduit);
            return p;
        }

        static public void AddProduit(Produits p)
        //Méthode qui permet d'entrer un enregistrement
        {
            List<Produits> liste = ListProduits();
            // on ajoute l'enregistrement
            liste.Add(p);
            SaveProduits(liste);
        }

        static public void UpdateProduit(Produits p)
        //Méthode qui permet de modifier un enregistrement
        {
            List<Produits> liste = ListProduits();
            // on recherche la position du produit dans la liste
            int position = liste.FindIndex(r => r.IdProduit == p.IdProduit);
            // on met à jour le produit dans la liste
            liste[position].NumeroProduit = p.NumeroProduit;
            liste[position].LibelleProduit = p.LibelleProduit;
            liste[position].Quantite = p.Quantite;
            // on sauvegarde dans le fichier
            SaveProduits(liste);
        }

        static public void DeleteProduit(Produits p)
        //Méthode qui permet de modifier un enregistrement
        {
            List<Produits> liste = ListProduits();
            // on recherche la position du produit dans la liste
            liste.Remove( p);
            // on sauvegarde dans le fichier
            SaveProduits(liste);
        }
    }
}

