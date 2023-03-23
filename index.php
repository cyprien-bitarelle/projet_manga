<?php
include 'menu.php';
include 'fonctions.php';
?>

<main>
    <h1>CATALOGUE MANGA</h1>
    <div id="contenu">
        <?php
        include 'filtres.php';
        ?>
        <article id="content">
            <ul id="alphabet">
                <li class="lettre">Tous</li>
                <li class="lettre">0/9</li>
                <li class="lettre">A</li>
                <li class="lettre">B</li>
                <li class="lettre">C</li>
                <li class="lettre">D</li>
                <li class="lettre">E</li>
                <li class="lettre">F</li>
                <li class="lettre">G</li>
                <li class="lettre">H</li>
                <li class="lettre">I</li>
                <li class="lettre">J</li>
                <li class="lettre">K</li>
                <li class="lettre">L</li>
                <li class="lettre">M</li>
                <li class="lettre">N</li>
                <li class="lettre">O</li>
                <li class="lettre">P</li>
                <li class="lettre">Q</li>
                <li class="lettre">R</li>
                <li class="lettre">S</li>
                <li class="lettre">T</li>
                <li class="lettre">U</li>
                <li class="lettre">V</li>
                <li class="lettre">W</li>
                <li class="lettre">X</li>
                <li class="lettre">Y</li>
                <li class="lettre">Z</li>
            </ul>
            <div id="catalogue">
                <?php
                affichageManga();
                ?>
            </div>
            <div id="pagination">
                <div>Précédent</div>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>....</li>
                    <li>97</li>
                    <li>98</li>
                    <li>99</li>
                </ul>
                <div>Suivant</div>
            </div>
        </article>
    </div>

</main>