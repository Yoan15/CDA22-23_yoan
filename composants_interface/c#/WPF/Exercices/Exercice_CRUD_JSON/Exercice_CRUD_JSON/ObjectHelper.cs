﻿using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Threading.Tasks;

namespace Exercice_CRUD_JSON
{
    static class ProduitsHelper
    {
        public static void Dump(this object data)
        {
            string json = JsonConvert.SerializeObject(data, Formatting.Indented);
            Trace.WriteLine(json);
        }
    }
}