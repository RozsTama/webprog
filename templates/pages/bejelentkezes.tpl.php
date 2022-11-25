<div class="oszlopok">
    <form action="bejelentkezes_info" method="post">
        <h2>Bejelentkezés</h2>
        <div class="form-elem"><label>Felhasználónév</label><input class="mezo" type="text" name="felhasznalonev" required></div>
        <div class="form-elem"><label>Jelszó</label><input class="mezo" type="password" name="jelszo" required></div>
        <input class="gomb" type="submit" name="bejelentkezes" value="Bejelentkezés">
    </form>
    <form action="regisztracio" method="post">
        <h2>Regisztráció</h2>
        <div class="form-elem"><label>Családnév</label><input class="mezo" type="text" name="csaladnev" required></div>
        <div class="form-elem"><label>Utónév</label><input class="mezo" type="text" name="utonev" required></div>
        <div class="form-elem"><label>Felhasználónév</label><input class="mezo" type="text" name="felhasznalonev" required></div>
        <div class="form-elem"><label>Jelszó</label><input class="mezo" type="password" name="jelszo" required></div>
        <input class="gomb" type="submit" name="regisztracio" value="Regisztráció">
    </form>
</div>
