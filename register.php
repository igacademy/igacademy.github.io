<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - InfinityGreece Academy</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,300i,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="desktop/login.css">
    <link rel="stylesheet" type="text/css" href="desktop/general.css">
    <link rel="stylesheet" type="text/css" href="desktop/navigation.css">
    <link rel="stylesheet" type="text/css" href="desktop/style.css">
    <link rel="stylesheet" type="text/css" href="desktop/register.css">

 <!-- <script>
    setInterval(function(){
      window.history.go(0);
    }, 3000);
  </script>-->
  <script>
$(document).ready(function(){

$(".wrap").click(function(){
$(".top").toggleClass("addedtop");
$(".mid").toggleClass("addedmid");
$(".bot").toggleClass("addedbot");
$(".menu").toggleClass("triggered");
$("fade").toggleClass("fadeblack");


});



}); //final
</script>
  </head>
  <body>
    <bg></bg>
    <gradient></gradient>
    <fade></fade>
    <block></block>
    <header>
    <div class="content">
      <div class="navbar">  <div class="logo">InfinityGreece <span>Academy</span></div></div>

        <div class="wrap">
<span class="line top"></span>
<span class="line mid"></span>
<span class="line bot"></span>
</div>

          <nav class="menu">
                <a href="index.php" class="nav-btn"><span>Αρχική</span></a>
                <a href="login.php" class="nav-btn"><span>Σύνδεση</span></a>
                <a href="register.php" class="nav-btn"><span>Εγγραφή</span></a>
                <footer>
                  <span class="copyright-text">Copyright &copy; InfinityGreece</span>
                  <span class="footer-buttons">
                    <a href="#" class="footer-btn">Contact</a>
                    <a href="#" class="footer-btn">Privacy Policy</a>
                    <a href="#" class="footer-btn">About</a>


                  </span>
                </footer>
                      </nav>
      </div>
  </header>

  <form action="#" method="post" class="input-form">
    <h1 class="page-title">Εγγραφή</h1>
    <input type="text" class="text-input half-input" placeholder="Όνομα">
    <input type="text" class="text-input  half-input" placeholder="Επώνυμο">
    <input type="email" class="text-input" placeholder="Διεύθυνση e-mail">
    <input type="password" class="text-input" placeholder="Δημιουργία κωδικού πρόσβασης">
    <input type="submit" class="submit-button" value="Εγγραφή">
    <p class="already-have-account">Έχεις ήδη λογαριασμό; <a href="login.php">Συνδέσου εδώ!</a></p>

  </form>
  <div class="login-error-snackbar">
    <p class="form-problem-text">Ο λογαριασμός υπάρχει ήδη.</p>
  </div>

  </body>
</html>
