<?php

function afficheListePersonne()
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

    $table .= '</tbody>
            </table>';
    return $table;
}