
<footer>
<div id="backToTop"><i class="fa-solid fa-square-caret-up fa-2x"></i></div>
</footer>
<?php
 echo ' <script src="./JS/script.js"></script>';
 if (isset($page)) {
   preg_match("/Liste|Form/", $page[1], $matches);
   if ($matches != null) {
       if ($matches[0] == "Liste") {
           //    <script src="./JS/FiltresListe.js"></script>

           echo '  
           <script src="./JS/Tri.js"></script>
           <script src="./JS/SelectionListe.js"></script>
           <script src="./JS/Filtre.js"></script>';
           if ($page[1]!="ListeProduitsSansAjax" && $page[1]!="ListeClients")
           echo '<script src="./JS/Pagination.js"></script>';
           if ($page[1]=="ListeClients")  echo '<script src="./JS/ListeClientsAjax.js"></script>';
           if ($page[1]=="ListeVentes")  echo '<script src="./JS/ListeVentesAjax.js"></script>';
       } else if ($matches[0] == "Form") {
           if ($page[1] != "FormFichesItv")
               echo '<script src="./JS/VerifForm.js"></script>';
       } 
   }
}
echo '</body>
</html>';