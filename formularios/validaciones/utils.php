<?php
function sanearCadenas(string $cad): string{
    return htmlspecialchars(trim($cad));  //trim() quita espacios en blanco al principio y al final ltrim(),rtrim()
}