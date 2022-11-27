<h2>Kapcsolat</h2>
<form name="kapcsolat" action="<?= $gyokerkonyvtar ?>kapcsolat-adatok" onsubmit="return ellenoriz();" method="post">
    <div class="form-elem"><label>Név (minimum 5 karakter):</label><input class="mezo" id="nev" type="text" name="nev" size="20" maxlength="40"></div>
    <div class="form-elem"><label>E-mail (kötelező):</label><input class="mezo" id="email" type="text" name="email" size="30" maxlength="40"></div>
    <div class="form-elem"><label>Üzenet (kötelező):</label><textarea class="mezo" id="szoveg" name="szoveg" cols="40" rows="10"></textarea></div>
    <div class="form-elem"><input class="gomb" id="kuld" type="submit" value="Küld"><button class="gomb" onclick="ellenoriz();" type="button">Ellenőriz</button></div>
</form>
