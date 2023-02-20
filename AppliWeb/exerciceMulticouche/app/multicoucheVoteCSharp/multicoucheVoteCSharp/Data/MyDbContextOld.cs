using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace multicoucheVoteCSharp.Data
{
    public class MyDbContextOld: DbContext
    {
        public MyDbContextOld(DbContextOptions<MyDbContextOld> options): base(options)
        {

        }
    }
}
