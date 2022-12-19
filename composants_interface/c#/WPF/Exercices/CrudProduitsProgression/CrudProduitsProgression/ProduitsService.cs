using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CrudProduitsProgression
{
    class ProduitsService
    {
        const string PATH = @"../../Produits.json";

        public static List<Produits> ListProduits()
        {
            string contenu;
            List<Produits> liste;
            // on récupère le contenu brut du fichier
            contenu = DaoJson.LireFichier(PATH);
            // on transforme le JSOn en objet métier
            // Deserialize prend un paramètre entre <> pour préciser le type de sortie
            // et un paramètre entre (), la valeur à convertir
            liste = JsonConvert.DeserializeObject<List<Produits>>(contenu);
            return liste;
        }

        public static void EcrireProduits(List<Produits> liste)
        {
            // on tranforme la liste en string
            string contenu = JsonConvert.SerializeObject(liste);
            // on écrit dans le fichier
            DaoJson.EcrireFichier(PATH, contenu);
        }

        public static void UpdateProduit(Produits p)
        {
            List<Produits> liste;
            // on extrait la liste des produits
            liste = ListProduits();
            // on modifie le produit concerné
            foreach (var elt in liste)
            {
                if (p.IdProduit == elt.IdProduit)
                {
                    elt.LibelleProduit = p.LibelleProduit;
                    elt.NumeroProduit = p.NumeroProduit;
                    elt.Quantite = p.Quantite;
                }
            }
            // on enregistre les modifications
            EcrireProduits(liste);
        }
        public static void AddProduit(Produits p)
        {
            List<Produits> liste;
            // on extrait la liste des produits
            liste = ListProduits();
            // on ajoute le produit concerné
            liste.Add(p);
            // on enregistre les modifications
            EcrireProduits(liste);
        }

        public static Produits FindById(Produits p)
        {
            List<Produits> liste;
            // on extrait la liste des produits
            liste = ListProduits();
            // on boucle pour trouver l'élément
            foreach (var elt in liste)
            {
                if (p.IdProduit == elt.IdProduit)
                    return elt;
            }
            // si le produit n'est pas trouvé, on renvoi un produit vide
            return new Produits();
        }

        public static void DeleteProduit(Produits p)
        {
            List<Produits> liste;
            // on extrait la liste des produits
            liste = ListProduits();
            // on supprime le produit concerné

            // pour utiliser Remove, il faut une méthode de comparaison
            liste.Remove(p);
            // on enregistre les modifications
            EcrireProduits(liste);
        }


    }

}

