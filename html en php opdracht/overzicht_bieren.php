<html>
<head>
<link rel="stylesheet" href="style.css">
<title>bieren</title>
</head>
<body>
<nav>
    <ul>
      <li><a href="index.html">home</a></li>
      <li><a href="overzicht_bieren.php">bieren</a></li>
    </ul>
  </nav>
 
        <?php
        include 'navbar.php';
        include 'functions.php';

        $conn = OpenDb();

        OvzBieren();
        
        ?>
    </body>
</html>    