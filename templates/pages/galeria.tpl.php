<div><h2>Galéria</h2><div class="link">(<a href="<?= $gyokerkonyvtar ?>kepfeltoltes">Képfeltöltés</a>)</div></div>
<?php
arsort($kepek);
foreach ($kepek as $fajl => $datum) { ?>
    <div class="kep">
        <a href="<?= $gyokerkonyvtar . $galeria['konyvtar'] . $fajl ?>">
            <img src="<?= $gyokerkonyvtar . $galeria['konyvtar'] . $fajl ?>">
        </a>
    </div>
<?php } ?>
