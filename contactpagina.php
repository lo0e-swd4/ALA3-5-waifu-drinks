<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Robbert Bons">
    <meta name="keywords" content=" ">
    <title>Contact Pagina</title>
    <link rel="stylesheet" type="text/css" href="css/Contactstyle.css">
</head>

<body>
    <header>
        <img src="images/Logo waifu drinks.png" class="Logo">
          <nav>
                  <a class="Hoofdnav" href="homepagina.php"><li>Home</li></a>
                  <a class="Hoofdnav" href="#"><li>Aandbiedingen</li></a>
                  <a class="Hoofdnav" href="sponsorpagina.php"><li>Sponsors</li></a>
                  <a class="Hoofdnav" href="contactpagina.php"><li>Contact</li></a>
                  <a class="Hoofdnav" href="aboutpagina.php"><li>About</li></a>
          </nav>
    </header>
    <main>
      <section class="Offerblock">
        <p>1 + 1 Gratis nieuwe offer eindigt 10:00:00:00</p>
      </section>

      <div class="wallpaper">
        <img src="images/NhRrw7.jpg" class="background" style="width:100%" >
       </div>

       <div class="Title">
         <h1>Contact</h1>
       </div>

      <article class="naam">
        <h2>Naam</h2>
       <form>
      <tr>
        <td><input class="item-1" type="text" name="voornaam" placeholder="Vul hier je naam in"></td>
      </tr>
      </form>
      </article>

      <article class="email">
      <h2>Email</h2>
        <form>
          <tr>
            <td><input class="item-2" type="text" name="email" placeholder="Vul hier je emailadres in"></td>
          </tr>
        </form>
      </article>

       <article class="telefoon">
      <h2>Telefoon</h2>
        <form>
          <tr>
            <td><input class="item-3" type="text" name="Telefoon" placeholder="Vul hier je telefoonnummer in"></td>
          </tr>
        </form>
      </article>

      <article class="Button">
        <input type="radio" value='klacht' name='klacht'> klacht
        <input type="radio" value='vraag'  name='vraag'> vraag
      </article>

      <button class="accordion" id="accPanel1">Onderwerp</button>
      <div class="panel">
        <p>Aanbiedingen</p>
        <p>Contact</p>
        <p>Sponsors</p>
        <p>About</p>
      </div>

      <form action="" metod="post">
      <label> bericht: <br><textarea cols="45" rows="5" name="mes"></textarea></label></br>
      <input type="submit" name="Versturen" value="post">
      </form>

    </main>
</body>
</html>