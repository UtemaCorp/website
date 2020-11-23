<html>
    <head>

    </head>
    <body>
        <form method="post" action="">
            <input type="submit" value="Mettre à jour le site !" name="Valider">
        </form>
    </body>
</html>



<?php

    if(isset($_POST['Valider'])){
        shell_exec('/usr/bin/git -C /home/pi/GitHub/website pull');
        shell_exec('rm -rf /var/www/html/{*,.*}');
        shell_exec('cp -a /home/pi/GitHub/website/. /var/www/html');
        header("Location:../index.html");
    }

?>
