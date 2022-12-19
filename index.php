<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="menubar">
    <h1>Meine Kontakte</h1>

    <div class="myname">
        <div class="avatar">D</div> <h2>Diego Landolt</h2>
    </div>
</div>


<div class="main">
 <div class="menu">
    <a href="index.php?page=start"><img src="img/house.svg">Start</a>
    <a href="index.php?page=hinzufügen"><img src="img/plus.svg">Kontakt Hinzufügen</a>
    <a href="index.php?page=contacts"><img src="img/contact.svg">Kontakte</a>
    <a href="index.php?page=legal"><img src="img/impressum.svg">Impressum</a>
</div>
    <div class="content">

   <?php 
        $headline = 'Herzlich Wilkommen';
        $contacts = [];

        if(file_exists('contacts.txt')) {
            $text = file_get_contents('contacts.txt', true);
            $contacts = json_decode($text, true);
        }

        if(isset($_POST['name']) && isset($_POST['phone'])) {
            echo ' Kontakt <b>'. $_POST['name'] . '</b> wurde Hinzugefügt';
            $newContact = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone']
            ];
            array_push($contacts, $newContact);
            file_put_contents('contacts.txt', json_encode($contacts, JSON_PRETTY_PRINT));
        }

        if($_GET['page'] == 'contacts') {
           $headline = 'Deine Kontakte';
        }

        if($_GET['page'] == 'legal') {
    $headline = 'Impressum';
        }
        if($_GET['page'] == 'hinzufügen') {
    $headline = 'Kontakt Hinzufügen';
        }
              echo'<h1>' . $headline .' </h1>';
    

              if($_GET['page'] == 'contacts') {
    
         echo'<p>Hier findest du Deine Kontakte</p>';
         foreach ($contacts as $row) {
            echo "<div class='card'>
            
                    </div>
                    ";
         }

              } 
   
              else if($_GET['page'] == 'hinzufügen') {
    
          echo'
                 <div>
                 Füge einen neuen Kontakt hinzu!
                 </div>
            <form action="?page=contacts" method="POST">
                <div> 
                    <input placeholder="Namen" name="name">
                </div>

                <div>
                    <input placeholder="Telefonnummer" name="phone">
                </div>
                 
                <button type="submit">Absenden</button>
            </form>
                 
                 ';
              }   

              

              else if($_GET['page'] == 'legal'){
           echo'Hier kommt demnächst noch ein impressum..';

             } 
   
        else {
                 echo'Du bist auf der Startseite!';
             }

             ?>
    </div>
</div>


   <div class="footer">
   <h3><img src="img/copyr.svg"> 2022 Diego Landolt</h3> 
   </div>
</body>
</html>