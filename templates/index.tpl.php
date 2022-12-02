<?php if (file_exists('./logicals/' . $keres['fajl'] . '.php')) { include('./logicals/' . $keres['fajl'] . '.php'); } ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ablakcim . ' – ' . (isset($oldalak[$oldal]) ? $oldalak[$oldal]['szoveg'] : $keres['szoveg']) ?></title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700|PT+Serif:400,700|McLaren|Roboto+Mono:400,700&amp;subset=latin,latin-ext">
    <link rel="stylesheet" type="text/css" href="<?= $gyokerkonyvtar ?>styles/stilus.css">
<?php if (file_exists('./styles/' . $keres['fajl'] . '.css')) { ?>    <link rel="stylesheet" type="text/css" href="<?= $gyokerkonyvtar ?>styles/<?= $keres['fajl']?>.css"><?php } ?>
<?php if (file_exists('./logicals/' . $keres['fajl'] . '.js')) { ?>    <script type="text/javascript" src="<?= $gyokerkonyvtar ?>logicals/<?= $keres['fajl']?>.js"></script><?php } ?>

</head>
<body>
    <nav>
        <div class="shaper">
            <ul>
<?php   foreach ($oldalak as $for_url => $for_oldal) { ?>
<?php       if (!isset($_SESSION['felhasznalonev']) && $for_oldal['menun'][0] ||
                isset($_SESSION['felhasznalonev']) && $for_oldal['menun'][1] ||
                isset($_SESSION['admin']) && $for_oldal['menun'][2]) { ?>
                <li <?= ($for_url == $oldal ? 'class="active"' : '') ?> >
                    <a href="<?= $gyokerkonyvtar . ($for_url != 'cimlap' ? $for_url : '') ?>"><?= $for_oldal['szoveg'] ?></a>
                </li>
<?php       } ?>
<?php   } ?>
            </ul>
        </div>
    </nav>
<?php if (isset($_SESSION['felhasznalonev'])) { ?>
    <div style="border-bottom: 1px solid;">
        <div class="shaper" style="text-align: right;">
            Bejelentkezett: <?= $_SESSION['csaladnev'] . ' ' . $_SESSION['utonev'] . ' (' . $_SESSION['felhasznalonev'] . ')' ?>

        </div>
    </div>
<?php } ?>
    <main>
        <div class="shaper">
<?php include('./templates/pages/' . $keres['fajl'] . '.tpl.php'); ?>
        </div>
    </main>
    <footer>
        <div class="shaper">
            <?= $lablec ?>

        </div>
    </footer>
</body>
</html>
