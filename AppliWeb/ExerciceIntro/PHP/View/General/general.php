<?php

function startHtml()
{
    $head = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./CSS/liste.css">
        <link rel="stylesheet" href="./CSS/form.css">
        <link rel="stylesheet" href="./CSS/root.css">
        <link rel="stylesheet" href="./CSS/style.css">
        <title>Framework</title>
    </head>
    <body>';
    return $head;
}

function headerHtml()
{
    $header = '<header></header>';
    return $header;
}

function nav()
{
    $nav = '<nav></nav>';
    return $nav;
}

function footer()
{
    $footer = '</body>
            <footer></footer>
        </html>';
    return $footer;
}