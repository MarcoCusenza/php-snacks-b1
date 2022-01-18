<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="#">
</head>

<body>
  <?php
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  if ((strlen($name) > 3)) {
    if (strpos($mail, "@")) {
      if (strpos($mail, ".")) {
        if (is_numeric($age)) {
          echo ("Accesso Riuscito");
        } else {
          echo ("Accesso Negato: L'età inserita non è un numero");
        }
      } else {
        echo ("Accesso Negato: La mail non contiene punti (.)");
      }
    } else {
      echo ("Accesso Negato: La mail non contiene nessuna chiocciola (@)");
    }
  } else {
    echo ("Accesso Negato: Il nome inserito è troppo breve");
  }

  ?>
</body>

</html>