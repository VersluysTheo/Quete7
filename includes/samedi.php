<?php
$samedi =  [
    [
    'NORD' => '14°,12°,14°,14°',
    'SUD'=> '18°,17°,17°,17°',
    'OUEST'=> '13°,11°,13°,13°',
    'EST' => '10°,12°,10°,15°',
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($samedi as $meteo => $valeur){ ?>
    <div class="text-center">
        <div>
            <?php echo $valeur ['NORD']; ?>
        </div>
    </div>
    <div class="text-bottom">
        <div>
            <?php echo $valeur ['SUD']; ?>
        </div>
    </div>
    <div class="text-left">
        <div>
            <?php echo $valeur ['OUEST']; ?>
        </div>
    </div>
    <div class="text-right">
        <div>
            <?php echo $valeur ['EST']; ?>
        </div>
    </div>

    <?php } ?>