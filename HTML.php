<?php
$catalog = [
        [
        'pavadinimas' => 'Vilniaus alus',
        'kaina' => 5,
        'aprasymas' => 'Pzda',
        'nuolaida' => 10
    ],
        [
        'pavadnimas' => 'Kauno alus',
        'kaina' => 3,
        'aprasymas' => 'zopa',
        'nuolaida' => 10
    ],
        [
        'pavadinimas' => 'Klaipedos alus',
        'kaina' => 2,
        'aprasymas' => 'vapse',
        'nuolaida' => 10
    ]
];
?>
<html>
    <style>
        .Produktas {
        }
        .Pavadinimas{
            background-color: red;
        }
        .Kaina{
        }
        .Aprasymas{
        }
        .Nuolaida{
        }
    </style>
    <body>
        <?php foreach ($catalog as $produktas): ?>
            <div class="Produktas">
                <span class="Pavadinimas">
                    <?php print $produktas['Pavadinimas'] . " <br>" ?>
                </span>
                <span class="Kaina">
                    <?php print $produktas['Kaina'] . " <br>" ?>   
                </span>
                <span class="Aprasymas">
                    <?php print $produktas['Aprasymas'] . " <br>" ?>
                </span>
                <?php if ($produktas['Nuolaida'] > 0): ?>
                    <span class="Nuolaida">     
                        <?php print $produktas['Nuolaida'] . " <br>" ?>
                    </span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </body>
</html>