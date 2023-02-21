<?php

function startHtml($nom, $titre)
{
    $head = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./CSS/root.css">
        <link rel="stylesheet" href="./CSS/style.css">
        <link rel="stylesheet" href="./CSS/liste.css">
        <link rel="stylesheet" href="./CSS/form.css">';
        //if (substr($nom, 0, 4) == "form") {
            // $head .= '<link rel="stylesheet" href="./CSS/liste.css">
            //         <link rel="stylesheet" href="./CSS/form.css">';
        // }
        // else if(substr($nom, 0, 5) == "liste")
        // {
        //    $head .= '<link rel="stylesheet" href="./CSS/liste.css">';
        //}
        
        
        $head .= '<title>'. $titre .'</title>
    </head>
    <body>';
    return $head;
}