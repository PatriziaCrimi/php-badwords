<?php
  $badword = $_GET['badword'];

  $title = 'Censuratore';
  $subtitle = 'Scioglilingua numero: ';
  $paragraph_1 = 'Apelle figlio d\'Apollo fece una palla di pelle di pollo, tutti i pesci vennero a galla per vedere la palla di pelle di pollo fatta da Apelle figlio d\'Apollo.';
  $paragraph_1_censored = 'Apelle figlio d\'Apollo fece una ' . $badword . ' di pelle di pollo, tutti i pesci vennero a galla per vedere la ' . $badword . ' di pelle di pollo fatta da Apelle figlio d\'Apollo.';
  $paragraph_2 = 'Una rara rana nera sulla rena errò una sera, una rara rana bianca sulla rena errò un po\' stanca.';
  $paragraph_2_censored = 'Una ' . $badword . ' rana nera sulla rena errò una sera, una ' . $badword . ' rana bianca sulla rena errò un po\' stanca.';
  $paragraph_3 = 'Se la serva non ti serve, a che serve che ti serva di una serva che non serve? Serviti di una serva che serve, e se questa non ti serve, serviti dei miei servi.';
  $paragraph_3_censored = 'Se la serva non ti ' . $badword . ', a che ' . $badword . ' che ti serva di una serva che non ' . $badword .'? Serviti di una serva che ' . $badword .', e se questa non ti ' . $badword . ', serviti dei miei servi.';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Censuratore Badwords</title>
  </head>
  <body>
    <h1>
      <?php echo $title ?>
    </h1>
    <!-- Tongue-twister num. 1 -->
    <h2>
      <?php echo $subtitle . '1';
      ?>
    </h2>
    <p>
      <?php echo $paragraph_1;
      ?>
    </p>
    <h3>
      <?php echo $censored;
      ?>
    </h3>
    <p>
      <?php echo $paragraph_1_censored;
      ?>
    </p>
    <!-- Tongue-twister num. 2 -->
    <h2>
      <?php echo $subtitle . '2';
      ?>
    </h2>
    <p>
      <?php echo $paragraph_2
      ?>
    </p>
    <h3>
      <?php echo $censored;
      ?>
    </h3>
    <p>
      <?php echo $paragraph_2_censored;
      ?>
    </p>
    <!-- Tongue-twister num. 3 -->
    <h2>
      <?php echo $subtitle . '3';
      ?>
    </h2>
    <p>
      <?php echo $paragraph_3;
      ?>
    </p>
    <h3>
      <?php echo $censored;
      ?>
    </h3>
    <p>
      <?php echo $paragraph_3_censored;
      ?>
    </p>
  </body>
</html>
