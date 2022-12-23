using System;
using System.Collections.Generic;

#nullable disable

namespace GestionStock.Models.DbModels
{
    public partial class Article
    {
        public int IdArticle { get; set; }
        public string LibelleArticle { get; set; }
        public int? QuantiteStockee { get; set; }
        public int IdCategorie { get; set; }

        public virtual Category IdCategorieNavigation { get; set; }
    }
}
