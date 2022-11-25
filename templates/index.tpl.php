<?php if (file_exists('./logicals/' . $keres['fajl'] . '.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ablakcim['cim'] . ' – ' . $keres['szoveg'] ?></title>
    <link rel="stylesheet" href="./styles/stilus.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700|PT+Serif:400,700|McLaren|Roboto+Mono:400,700&amp;subset=latin,latin-ext">
<?php if (file_exists('./styles/' . $keres['fajl'] . '.css')) { ?>    <link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>

</head>
<body>
    <nav>
        <div class="shaper">
            <ul>
<?php   foreach ($oldalak as $url => $oldal) { ?>
<?php       if (!isset($_SESSION['felhasznalonev']) && $oldal['menun'][0] ||
                isset($_SESSION['felhasznalonev']) && ($oldal['menun'][1] ||
                isset($_SESSION['admin']) && ($oldal['menun'][2]))) { ?>
                <li <?=(($oldal == $keres) ? 'class="active"' : '')?> >
                    <a href="<?= ($url == '/') ? '.' : $url ?>"><?= $oldal['szoveg'] ?></a>
                </li>
<?php       } ?>
<?php   } ?>
            </ul>
        </div>
    </nav>
    <main>
        <div class="shaper">
<?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
    </main>
    <footer>
        <div class="shaper">
<?php if (isset($lablec['copyright'])) { ?>            &copy;&nbsp;<?= $lablec['copyright'] ?><?php } ?>
<?php if (isset($lablec['ceg'])) { ?> – <?= $lablec['ceg'] ?><?php } ?>

        </div>
    </footer>
</body>
</html>
