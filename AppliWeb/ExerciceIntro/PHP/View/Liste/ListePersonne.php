<?php

function afficheListePersonne(string $table, array $conditions = null , string $orderby = null)
{
    //début du tableau
    $table = '<table>
                <thead>
                    <tr>
                        <th colspan="2">nom</th>
                        <th colspan="2">prénom</th>
                        <th colspan="2">ville</th>
                    </tr>
                </thead>
                <tbody>';

    //$data = ($table.'sManager')::getList($colonnes, $conditions, $orderby, null, false, true);
    // foreach ($data as $value) {
    //     $table .= '<tr>';
    //     for ($i=0; $i < $value; $i++) { 
    //         $table .= '<td>'.$value[$i].'</td>';
    //     }
    //     $table .= '</tr>';
    // }
    $table .= '</tbody>
            </table>';
    return $table;
}