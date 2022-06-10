<?php

    function matNumeros($vetor){

        echo '<div class="matriz"><table border=1 rows=5 cols=5><tr>';
        for ($i = 0; $i < 25; $i++) {
            if ($i % 5 === 0) {
                echo '</tr><tr>';
            }
            echo "<td><div class='results'>$vetor[$i]</div></td>";
        }
        echo '</tr></table></div>';
    }

    function matImparPar($numero, $contagem){

        echo '<div class="matriz"><table border=1 rows=5 cols=5><tr>';
        for ($i = 0; $i < count($contagem); $i++) {
            if ($i % 5 === 0) {
                echo '</tr><tr>';
            }
            echo "<td><div class='results'>$numero[$i]</div></td>";
        }
        echo '</tr></table></div>';
    }
?>