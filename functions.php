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
$geros = girls($panos);

?>

<html>
    <body>
        <?php foreach($geros as $vardas): ?>
        <h2><?php print $vardas; ?> </h2>
        <?php endforeach; ?>
    </body>
</html>