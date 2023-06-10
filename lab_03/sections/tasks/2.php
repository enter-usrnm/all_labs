<style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
    }

    div {
        padding: 5px 10px;
    }
</style>

<?php
    for ($i = 2; $i <= 9; $i++) {

        echo '
        <div style="float:left" >
            <table cellpadding = "5" >
                <tr>
                    <td>';

        for ($j = 1; $j <= 10; $j++) {
            echo "
            $i x $j = 
            ".$i*$j."<br>";
        }

        echo '      </td>
                </tr>
            </table>
        </div>';
    };