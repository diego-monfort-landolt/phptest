<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <h1>Hallo Weld</h1>
    <p>PhP test local whit Xamp</p>
    <div class="nav">
    <a href="index.php?page=start">Start</a>
    <a href="index.php?page=contacts">Kontakte</a>
    <a href="index.php?page=legal">Impressum</a>
   </div>


   <?php 
$headline = 'Herzlich Wilkommen';
if($_GET['page'] == 'contacts') {
    $headline = 'Deine Kontakte';
}

if($_GET['page'] == 'legal') {
    $headline = 'Impressum';
}
    echo'<h1>' . $headline .' </h1>';

   

   if($_GET['page'] == 'contacts') {
    
    echo'<p>Hier findest du Deine Kontakte</p>';

   }else if($_GET['page'] == 'legal'){
    echo'nim dir bischen zeit und lies dir unser impresum durch!';

   } else {
        echo'Du bist auf der Startseite!';
   }

   ?>
</body>
</html>