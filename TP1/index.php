<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculateur de revenus</title>
    <link rel="stylesheet" href="index.css"/>
</head>
<body>
<div class="login-box">
  <h2>Calculer vos impots</h2>
  <form action="resultatImpot.php" method="post">
    <div class="user-box">
    <input name="nom" id="nom" type="text" />
      <label>Votre nom</label>
    </div>
    <div class="user-box">
    <input name="revenus" id="revenus" type="number" />
      <label>Votre revenu de l'année</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button type="submit">OK</button>
    </a>
  </form>
</div>
</body>
</html>

