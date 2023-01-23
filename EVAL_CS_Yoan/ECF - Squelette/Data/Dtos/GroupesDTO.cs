using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ECF.Data.Dtos
{
    public class GroupesDTOIn
    {
        public string Logo { get; set; }
        public int NombreDeFollowers { get; set; }
        public string NomDuGroupe { get; set; }
    }

    public class GroupesDTOOut
    {
        public int IdGroupe { get; set; }
        public string Logo { get; set; }
        public int NombreDeFollowers { get; set; }
        public string NomDuGroupe { get; set; }
    }

    public class GroupesDTOOutAvecMusiciens
    {
        public void GroupesDTOAvecMusiciens()
        {
            ListeMusiciens = new HashSet<MusiciensDTOIn>();
        }

        public int IdGroupe { get; set; }
        public ICollection<MusiciensDTOIn> ListeMusiciens { get; set; }
        public string Logo { get; set; }
        public int NombreDeFollowers { get; set; }
        public string NomDuGroupe { get; set; }

    }
}
