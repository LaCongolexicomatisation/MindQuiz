<main id="mainChoixTheme" role="main">
    <form action="game.php" method="post">
        <fieldset id="fieldsetChoix">
            <h3>Choix du thème</h3>
            <label for="pseudo">Pseudo :</label><br />
            <input id="pseudo" type="text" name="pseudo" size="42" placeholder="entrer votre pseudo" maxlength="42" required/>

            <br />

            <label for="theme">Theme :</label><br />
            <select id="theme" name="choixTheme">
                <option value="lotr" selected>Le seigneur des anneaux</option>
                <option value="hobbit">Le Hobbit</option>
            </select>

            <p>Mode de jeu : <br/>
                <input id="modeFacile" type="radio" name="choixMode"  value="facile" checked/><label for="modeFacile">Facile</label><br/>
                <input id="modeDifficile" type="radio" name="choixMode" value="difficile"/><label for="modeDifficile">Difficile</label>
            </p>
        </fieldset>

        <input type="submit" name="go" value="Go" />
    </form>
</main>

