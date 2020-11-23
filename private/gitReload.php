<html>
    <head>

    </head>
    <body>
        <form method="post" action="./">
            <input type="submit" value="Mettre à jour le site !" name="Valider">
        </form>
    </body>
</html>



<?php

    if(isset($_POST['Valider'])){
        shell_exec("cd /home/pi/GitHub/website && git pull && sudo rm -rf /var/www/html/{*,.*} && sudo cp -a ./. /var/www/html");
    }
    else echo 'Bad Method'

?>
