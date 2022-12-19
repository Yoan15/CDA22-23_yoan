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

        
    }
}
