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
    <link rel="stylesheet" href="css/register.css" type="text/css">
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
<div class="register">
<center> <h1>REJESTRACJA</h1> </center>
<form action="register.php" method="post">

    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Username" id="username" required>

    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" id="password" required>

    <label for="email">E-mail</label>
    <input type="email" name="email" placeholder="Email" id="email" required>

    <input type="submit" value="Register">
  
</form> 
</div>
        </body>

        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    </form>
        </body>
        </html>