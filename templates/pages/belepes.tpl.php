<?php   if (isset($atiranyitas)) { ?>
<blockquote>A kért oldal megtekintéséhez be kell jelentkeznie.</blockquote>
<?php   } ?>
<div class="oszlopok">
    <form action="<?= $gyokerkonyvtar ?>belepes-info" method="post">
        <h2>Belépés</h2>
        <div class="form-elem"><label>Felhasználónév</label><input class="mezo" type="text" name="felhasznalonev" required></div>
        <div class="form-elem"><label>Jelszó</label><input class="mezo" type="password" name="jelszo" required></div>
<?php if (isset($atiranyitas)) { ?>        <input type="hidden" name="atiranyitas" value="<?= $atiranyitas ?>"><?php } ?>

        <input class="gomb" type="submit" name="belepes" value="Belépés">
    </form>
    <form action="<?= $gyokerkonyvtar ?>regisztracio" method="post">
        <h2>Regisztráció</h2>
        <div class="form-elem"><label>Családnév</label><input class="mezo" type="text" name="csaladnev" required></div>
        <div class="form-elem"><label>Utónév</label><input class="mezo" type="text" name="utonev" required></div>
        <div class="form-elem"><label>Felhasználónév</label><input class="mezo" type="text" name="felhasznalonev" required></div>
        <div class="form-elem"><label>Jelszó</label><input class="mezo" type="password" name="jelszo" required></div>
        <input class="gomb" type="submit" name="regisztracio" value="Regisztráció">
    </form>
</div>
