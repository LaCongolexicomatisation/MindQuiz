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
//    class="ui-widget-content"
    ?>
    <main role="main" id="mainGame">

        <section id="reponses">

            <div class="dropper">
                <div id="draggable1" class="draggable">
                    <p>Réponse 1</p>
                </div>

                <br/>

                <div id="draggable2" class="draggable">
                    <p>Réponse 2</p>
                </div>

                <br/>

                <div id="draggable3" class="draggable">
                    <p>Réponse 3</p>
                </div>

                <br/>

                <div id="draggable4" class="draggable">
                    <p>Réponse 4</p>
                </div>

                <br/>

                <div id="draggable5" class="draggable">
                    <p>Réponse piège</p>
                </div>
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
            <div id="emplacement" class="dropper">
<!--                <div class="draggable">dd</div>-->
            </div>

            <input type="submit" value="valider" name="valider"/>
        </section>

    </main>
    <?php
} else {
    echo 'erreur';
}
?>

