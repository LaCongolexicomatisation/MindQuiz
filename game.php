<?php require_once 'head.php'; ?>
<script>
    $(function () {
        $("#draggable1").draggable();
        $("#draggable2").draggable();
        $("#draggable3").draggable();
        $("#draggable4").draggable();
        $("#draggable5").draggable();
    });
</script>
<?php


if (isset($_POST['go'])) {
    $theme = $_POST['pseudo'];
    echo 'Bienvenue, ', $theme;
    print('<p id="time">00:00:00</p>');

    switch ($_POST['choixTheme']) {
        case 'lotr':
            //echo 'seigneur des anneaux';
            //placer ici le chargement des questions / réponses concernant ce thème
            break;
        case 'hobbit':
            //  echo 'hobbit';
            //placer ici le chargement des questions / réponses concernant ce thème
            break;
        default:
            echo 'Pas de theme';
    }
    print('
    <main role="main" id="mainGame">
    <section id="reponses">

        <div id="draggable1" class="ui-widget-content">
            <p>Réponse 1</p>
        </div>
        <br/>

        <div id="draggable2" class="ui-widget-content">
            <p>Réponse 2</p>
        </div>

        <br/>

        <div id="draggable3" class="ui-widget-content">
            <p>Réponse 3</p>
        </div>

        <br/>

        <div id="draggable4" class="ui-widget-content">
            <p>Réponse 4</p>
        </div>

        <br/>

        <div id="draggable5" class="ui-widget-content">
            <p>Réponse piège</p>
        </div>
    </section>

    <section id="question">
        <h2>Question : </h2>
        <hr/>
        <table id="correction">
            <td class="helper"></td>
            <td class="helper"></td>
            <td class="helper"></td>
            <td class="helper"></td>
        </table>
        <hr/>
        <table id="emplacement">
            <tr>
            <td class="eptRep"></td>
            </tr><tr>
            <td class="eptRep"></td>
            </tr><tr>
            <td class="eptRep"></td>
            </tr><tr>
            <td class="eptRep"></td>
            </tr>
        </table>
        <input type="submit" value="valider" name="valider" />
    </section>

    </mai>

</main>
    ');

} else {
    echo 'erreur';
}
?>

