<?php

function footer()
{
    $footer = '</body>
            <footer></footer>';
            $footer .= '<script src="./JS/script.js"></script>';
            //si la page est fournie
            //if (isset($page)) {
                //regex pour soit si c'est une liste ou un form
                // preg_match("/Liste|Form/", $page[1], $matches);
                // var_dump($matches);
                //si matches est différent de null
                //if ($matches != null) {
                    //si matches est égal à Liste
                    //if ($matches[0] == "Liste") {
                        //mettre les scripts JS pour les listes ici
                    //} elseif ($matches[0] == "Form") {
                        //mettre les scripts JS pour les formulaires ici
                        //if ($page[1] == "formVille") {
                            $footer .= '<script src="./JS/scriptListeVille.js"></script>';
                        //}
                        //if ($page[1] == "formDepartement") {
                            $footer .= '<script src="./JS/scriptListeDepartement.js"></script>';
                            $footer .= '<script src="./JS/scriptCheckVilles.js"></script>';
                        //}
                    //}
                //}
            // }
            $footer .='</html>';
    return $footer;
}