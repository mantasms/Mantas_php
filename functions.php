<?php

$panos = [
    [
        'vardas' => 'Monika',
        'Grazi' => true,
        'protinga' => false
    ],
    [
        'vardas' => 'Greta',
        'Grazi' => true,
        'protinga' => true
    ],
    [
        'vardas' => 'Laura',
        'Grazi' => false,
        'protinga' => true
    ],
    [
        'vardas' => 'Viktorija',
        'Grazi' => true,
        'protinga' => true
    ],
    [
        'vardas' => 'Aldona',
        'Grazi' => true,
        'protinga' => true
    ]
    
];

function girls($panos){
    $geros = [];
    foreach($panos as $pana){
        if($pana['Grazi'] && $pana['protinga']){
            $geros[] = $pana['vardas'];
        }
    }
    return $geros;
}

function randgirl($panos){    
    return $panos[rand(0, count($panos)-1)]['vardas'];
}

function percent($panos){
    $geros = girls($panos);
    $percent = count($geros) * 100 / count($panos);
    return $percent;
}

$geros = girls($panos);

?>

<html>
    <body>
        <?php foreach($geros as $vardas): ?>
        <h2><?php print $vardas; ?> </h2>
        <?php endforeach; ?>
        <h2>Random pana: <?php print randgirl($panos); ?></h2>
        <h2>Graziu panu: <?php print percent($panos); ?> %</h2>
    </body>
</html>