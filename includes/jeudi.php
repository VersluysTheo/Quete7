<?php
$jeudi =  [
    [
    'NORD' => '18°,17°,17°,18°',
    'SUD' => '21°,22°,22°,23°',
    'OUEST'=> '17°,19°,20°,18°',
    'EST' => '16°,16°,16°,15°',
    ]
];
// Affichage des Valeurs en fonction de la valeur
    foreach ($jeudi as $meteo => $valeur){ ?>
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