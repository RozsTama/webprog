<h2>Galéria</h2>
<?php
arsort($kepek);
foreach ($kepek as $fajl => $datum) { ?>
    <div class="kep">
        <a href="<?= $galeria['konyvtar'] . $fajl ?>">
            <img src="<?= $galeria['konyvtar'] . $fajl ?>">
        </a>
        <p>Név: <?= $fajl ?></p>
        <p>Dátum: <?= date($galeria['datumforma'], $datum) ?></p>
    </div>
<?php } ?>
