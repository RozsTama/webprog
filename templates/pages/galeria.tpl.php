<div><h2>Galéria</h2><div class="link">(<a href="<?= $gyokerkonyvtar ?>kepfeltoltes">Képfeltöltés</a>)</div></div>
<?php
arsort($kepek);
foreach ($kepek as $fajl => $datum) { ?>
    <div class="kep">
        <a href="<?= $galeria['konyvtar'] . $fajl ?>">
            <img src="<?= $galeria['konyvtar'] . $fajl ?>">
        </a>
    </div>
<?php } ?>
