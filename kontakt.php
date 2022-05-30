<!DOCTYPE html>
<html lang="en">
<head>
<title>Szkoła Języków obcych BeeClever</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fa.css">
    <link rel="stylesheet" href="css/aktualnosci.css">
    <link rel="stylesheet" href="css/container.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">BeeClever</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="aktualnosci.php">Aktualności <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="oferta.php">Oferta</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Materiały
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="matura.php">Matura</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="egzamin_ósmoklasisty.php">Egzamin ósmoklaisty</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="dla_najmłodszych.php">Dla najmłodszych</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt.php">Kontakt</a>
      </li>
      
    </ul>
    <li class="nav-item" my-2 my-lg-0>
        <a class="nav-link" href="logowanie.php">Zaloguj się</a>
      </li> 
    
  </div>
</nav>

<body>
            
<div class="container">
  <div style="text-align:center">
    <h2>NAPISZ DO NAS</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/logo1.png" style="width:100%">
    </div>
    <div class="column">
      <form action="kontakt.php">
        <label for="imie">Imię</label>
        <input type="text" id="imie" name="Imie" placeholder="Twoje imię...">
        <label for="nazwisko">Nazwisko</label>
        <input type="text" id="nazwisko" name="Nazwisko" placeholder="Twoje nazwisko...">
        <label for="mail">Adres e-mail</label>
        <input type="text" id="mail" name="mail" placeholder="Twój adres e-mail...">
        <label for="wiadomosc">Wiadomość</label>
        <textarea id="wiadomosc" name="wiadomosc" placeholder="Napisz coś..." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div> 


 

</body>



<footer class="footer"> 

    <table>
  <tr>
    <td>
    <a href="https://www.facebook.com/BeeClever.edu" class="fa fa-facebook"></a>
    </td>
  </tr>


</table>

    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>