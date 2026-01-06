<?php

    function pintar_circulos($col1,$col2,$col3,$col4){

         $colores = [$col1, $col2, $col3, $col4];

        echo '<div style="display: flex; gap: 20px;">';
        
        foreach($colores as $color){
            echo 
                <<<END
                    <svg width="200" height="200">
                        <circle cx="100" cy="100" r="50" fill="{$color}" />
                    </svg>
                END;
        }

        echo '</div>';

    }

?>