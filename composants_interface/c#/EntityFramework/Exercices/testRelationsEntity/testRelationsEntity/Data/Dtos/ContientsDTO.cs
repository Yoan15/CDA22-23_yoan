using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace testRelationsEntity.Data.Dtos
{
    public class ContientsDTO
    {
        public int IdProduit { get; set; }

        public int IdCategory { get; set; }
        public virtual ProduitsDTO Produits { get; set; }

        public virtual CategoriesDTO Categories { get; set; }
    }
}
