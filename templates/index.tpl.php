<?php session_start(); ?>
<?php if (file_exists('./logicals/' . $keres['fajl'] . '.php')) { include('./logicals/' . $keres['fajl'] . '.php'); } ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $ablakcim['cim'] ?></title>
    <link rel="stylesheet" href="./styles/stilus.css" type="text/css">
    <?php if (file_exists('./styles/' . $keres['fajl'] . '.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
    <nav id="menu">
        <div class="shaper">
            <ul>
                <?php foreach ($oldalak as $url => $oldal) { ?>
                    <?php if (! isset($_SESSION['felhasznalonev']) && $oldal['menun'][0] || isset($_SESSION['felhasznalonev']) && $oldal['menun'][1]) { ?>
                        <li <?= (($oldal == $keres) ? ' class="active"' : '') ?> >
                        <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                        <?= $oldal['szoveg'] ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <div id="bodycontent">
        <div class="shaper">
            <?php include('./templates/pages/' . $keres['fajl'] . '.tpl.php'); ?>
        </div>
    </div>
    <footer>
        <div class="shaper">
            <?php if (isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
            &nbsp;
            <?php if (isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
        </div>
    </footer>
</body>
</html>
