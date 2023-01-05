using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace testRelationsEntity.Data.Dtos
{
    public class ContientsDTO
    {
        public virtual ProduitsDTO Produits { get; set; }

        public virtual CategoriesDTO Categories { get; set; }
    }
}
