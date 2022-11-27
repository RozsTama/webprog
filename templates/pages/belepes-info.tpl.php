<?php   if (isset($row)) { ?>
<?php       if ($row) { ?>
            <h2>Bejelentkezett:</h2>
            Azonosító: <strong><?= $row['id'] ?></strong><br><br>
            Név: <strong><?= $row['csaladnev'] . ' ' . $row['utonev'] ?></strong>
<?php       } else { ?>
            <h2>A bejelentkezés nem sikerült!</h2>
            <a href="<?= $gyokerkonyvtar ?>belepes">Próbálja újra!</a>
<?php       } ?>
<?php   } ?>
<?php   if (isset($hibauzenet)) { ?>
            <h2><?= $hibauzenet ?></h2>
<?php   } ?>
