<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php

            function new_exercise(x) {
                $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
                echo $block;
            }

            new_exercise(1);
        ?>
        
    </body>
</html>