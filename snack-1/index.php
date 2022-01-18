<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Risultati Partite</title>
  <link rel="shortcut icon" href="#">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  $g1 = [
    "p1" => ["Olimpia Milano", "55", "Cantù", "60"],
    "p2" => ["Virtus Bologna", "72", "New Basket Brindisi", "62"],
    "p3" => ["Dinamo Polisportiva", "45", "Victoria Libertas", "55"],
    "p4" => ["Fortitudo Bologna", "50", "Reyer Venezia", "50"],
    "p5" => ["Milan", "1", "Spezia + Arbitro", "2"],
  ];
  ?>

  <main>
    <div class="container">
      <h1>Risultati giornata 1</h1>

      <div class="title">
        <h3>Squadra di casa</h3>
        <h3>PT</h3>
        <h3>PT</h3>
        <h3>Squadra ospite</h3>
      </div>

      <div class="tab">
        <?php for ($i = 0; $i <= count($g1); $i++) {
          if ($g1["p" . $i][1] > $g1["p" . $i][3]) {
            echo ("<div class='sq-casa winner'>");
            echo ($g1["p" . $i][0]);
            echo ("</div>");

            echo ("<div class='pt-casa winner'>");
            echo ($g1["p" . $i][1]);
            echo ("</div>");

            echo ("<div class='pt-ospite'>");
            echo ($g1["p" . $i][3]);
            echo ("</div>");

            echo ("<div class='sq-ospite'>");
            echo ($g1["p" . $i][2]);
            echo ("</div>");
          } else if ($g1["p" . $i][1] < $g1["p" . $i][3]) {
            echo ("<div class='sq-casa'>");
            echo ($g1["p" . $i][0]);
            echo ("</div>");

            echo ("<div class='pt-casa'>");
            echo ($g1["p" . $i][1]);
            echo ("</div>");

            echo ("<div class='pt-ospite winner'>");
            echo ($g1["p" . $i][3]);
            echo ("</div>");

            echo ("<div class='sq-ospite winner'>");
            echo ($g1["p" . $i][2]);
            echo ("</div>");
          } else {
            echo ("<div class='sq-casa pari'>");
            echo ($g1["p" . $i][0]);
            echo ("</div>");

            echo ("<div class='pt-casa pari'>");
            echo ($g1["p" . $i][1]);
            echo ("</div>");

            echo ("<div class='pt-ospite pari'>");
            echo ($g1["p" . $i][3]);
            echo ("</div>");

            echo ("<div class='sq-ospite pari'>");
            echo ($g1["p" . $i][2]);
            echo ("</div>");
          }
        } ?>
      </div>
    </div>
  </main>





</body>

</html>