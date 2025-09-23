<?php
$andalucia = [
    'Jaen',
    'Malaga',
    'Cadiz',
    'Sevilla',
    'Cordoba',
    'Huelva',
    'Granada',
    'Almeria',
];
$extremadura = ['Caceres', 'Badajoz'];
$valencia = ['Valencia', 'Alicante', 'Castellon'];
$galicia=['Orense', 'La Coruña', 'Pontevedra', 'Lugo'];
$comunidades = [
    'Valencia' => $valencia,
    'Extremadura' => $extremadura,
    'Andalucia' => $andalucia,
    'Galicia'=>$galicia,
];
//-------------SOLUCION
ksort($comunidades);
echo "<ol>";
foreach($comunidades as $nombre=>$provincias){
    echo "<li>$nombre</li>";
    echo "<ul>";
    sort($provincias);
    foreach($provincias as $nomProv){
        echo "<li>$nomProv</li>";
    }
    echo "</ul>";
}
echo "</ol>";