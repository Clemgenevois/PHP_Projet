<html>
<head>
<title>Bricomachin</title>
<meta charset="UTF-8"/>
<meta http-equiv="content-type" content="text/html;" />
<link rel="stylesheet" type="text/css" href="../view/design/style.css"
</head>

<body>
<header>
<h1>Bricomachin, le bricolage malin </h1>
<p><img src="../view/design/pub.png"/></p>
</header>
<h3>Les categories : </h3>
  <?php
  /////////////////////////////////////////
  // A Completer pour afficher la liste des catégories
  foreach($cat as $id){   ?>
    <p> <?php echo $id->getNom() ?></p>
  <?php }
  /////////////////////////////////////////
  // partie 2.4
    /////////////////////////////////////////

  ?>
<footer>
</p>Site fictif, issus de données réelles du Web</p>
</footer>
</body>
</html>
