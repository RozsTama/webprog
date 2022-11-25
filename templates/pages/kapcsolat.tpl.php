<h2>Kapcsolat</h2>
<form name="kapcsolat" action="<?= $gyokerkonyvtar ?>kapcsolat_adatok" onsubmit="return ellenoriz();" method="post">
    <div>
        <label>Név (minimum 5 karakter):</label><input id="nev" type="text" name="nev" size="20" maxlength="40">
        <br/>
        <label>E-mail (kötelező):</label><input id="email" type="text" name="email" size="30" maxlength="40">
        <br/>
        <label>Üzenet (kötelező):</label><textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea>
        <br/>
        <input id="kuld" type="submit" value="Küld">
        <button onclick="ellenoriz();" type="button">Ellenőriz</button>
    </div>
</form>
