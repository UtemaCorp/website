<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ComptesRots</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/DS-Digital.css">
    <link rel="stylesheet" href="assets/css/Banner.css">
    <link rel="stylesheet" href="assets/css/Not-automated-Counter.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body><!-- Bootstrap Static Header -->
<div style="background: url(https://i.postimg.cc/3N7wnb75/background.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold"><?php 
        
            if (isset($_POST['Valider'])) {
        if($_POST['Valider'] == 'Burp'){
            $file = fopen("data.txt", "r");
            $nbRots = fread($file, filesize('data.txt'));
            fclose($file);
            $file = fopen('data.txt', w);
            fwrite($file, ($nbRots + 1));
            fclose($file);
            header("Location: index.php");
        }
        elseif($_POST['Valider'] == 'Remove'){
                $file = fopen("data.txt", "r");
                $nbRots = fread($file, filesize('data.txt'));
                fclose($file);
                $file = fopen('data.txt', w);
                fwrite($file, ($nbRots - 1));
                fclose($file);
                header("Location: index.php");
        }
    }
    else{
        $file = fopen("data.txt", "r");
        $nbRots = fread($file, filesize('data.txt'));
        fclose($file);
        echo $nbRots . " Rots !";
    }
        
        
        ?></h1>
        <p class="font-italic mb-0">C'est fou comme ça passe vite...</p>
        <br>
        <form action="index.php" method="POST">
            <input type="submit" name="Valider" value="Burp" class="btn btn-primary px-5"></input>
            <input type="submit" name="Valider" value="Remove" class="btn btn-primary px-5"></input>
        </form>
    </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Not-automated-Counter.js"></script>
</body>

</html>
