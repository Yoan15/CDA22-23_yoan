using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CrudProduitsProgression
{
    class CategoriesService
    {
        const string PATH = @"../../Categories.json";

        public static List<Categories> ListCategories()
        {
            string contenu;
            List<Categories> liste;
            // on récupère le contenu brut du fichier
            contenu = DaoJson.LireFichier(PATH);
            // on transforme le JSOn en objet métier
            // Deserialize prend un paramètre entre <> pour préciser le type de sortie
            // et un paramètre entre (), la valeur à convertir
            liste = JsonConvert.DeserializeObject<List<Categories>>(contenu);
            return liste;
        }

        public static Categories FindById(Categories cat)
        {
            List<Categories> liste;
            // on extrait la liste des catégories
            liste = ListCategories();
            // on boucle pour trouver l'élément
            foreach (var elt in liste)
            {
                if (cat.IdCategorie == elt.IdCategorie)
                    return elt;
            }
            // si la catégorie n'est pas trouvé, on renvoi une catégorie vide
            return new Categories();
        }

        public static void EcrireCategories(List<Categories> liste)
        {
            // on tranforme la liste en string
            string contenu = JsonConvert.SerializeObject(liste);
            // on écrit dans le fichier
            DaoJson.EcrireFichier(PATH, contenu);
        }

        public static void AddCategorie(Categories cat)
        {
            List<Categories> liste;
            // on extrait la liste des catégories
            liste = ListCategories();
            // on ajoute la catégorie concernée
            liste.Add(cat);
            // on enregistre les modifications
            EcrireCategories(liste);
        }

        public static void UpdateCategorie(Categories cat)
        {
            List<Categories> liste;
            // on extrait la liste des catégories
            liste = ListCategories();
            // on modifie la catégorie concernée
            foreach (var elt in liste)
            {
                if (cat.IdCategorie == elt.IdCategorie)
                {
                    elt.LibelleCategorie = cat.LibelleCategorie;
                    elt.DescCategorie = cat.DescCategorie;
                }
            }
            // on enregistre les modifications
            EcrireCategories(liste);
        }

        public static void DeleteCategorie(Categories cat)
        {
            List<Categories> liste;
            // on extrait la liste des catégories
            liste = ListCategories();
            // on supprime la catégorie concerné
            // pour utiliser Remove, il faut une méthode de comparaison
            liste.Remove(cat);
            // on enregistre les modifications
            EcrireCategories(liste);
        }
    }
}
