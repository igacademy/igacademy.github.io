<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recent Courses - InfinityGreece Academy</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,300i,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="desktop/general.css">
    <link rel="stylesheet" type="text/css" href="desktop/navigation.css">
    <link rel="stylesheet" type="text/css" href="desktop/style.css">
    <link rel="stylesheet" type="text/css" href="desktop/main.css">
    <link rel="stylesheet" type="text/css" href="desktop/profilepage.css">
    <link rel="stylesheet" type="text/css" href="desktop/videopage.css">
    <link rel="stylesheet" type="text/css" href="desktop/category.css">
    <link rel="stylesheet" type="text/css" href="desktop/coursepage.css">

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
        $('.course-progress').each(function(i){ $($('.course-progress')[i]).css('color', (parseInt($($('.course-progress')[i]).text().slice(0, -1))) != 100 ? '#2496E2' : '#2ecc71' ) });
      }); //final
    </script>

  </head>
  <body>
    <fade></fade>
    <bg></bg>
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
                <a href="index.php" class="nav-btn"><span>Home</span></a>
                <a href="login.php" class="nav-btn"><span>My Courses</span></a>
                <a href="register.php" class="nav-btn"><span>My Profile</span></a>
                <a href="register.php" class="nav-btn"><span>Log Out</span></a>
                <footer>

                  <span class="copyright-text">Copyright &copy; InfinityGreece</span>
                  <span class="footer-buttons">
                    <a href="#" class="footer-btn">Επικοινωνία</a>
                    <a href="#" class="footer-btn">Απόρρητο</a>
                    <a href="#" class="footer-btn">Σχετικά</a>


                  </span>
                </footer>
        </nav>
    </div>
  </header>
  <h1 class="page-title">
    Wordpress
  </h1>
  <a href="#" class="enroll-button">
    <span class="enroll-text"> Εγγραφή </span>
  </a>
  <div class="lessons-wrap">

    <a href="#" class="lesson-link">
      <div class="lesson">
        <span class="lesson-title lesson-text">Wordpress #1</span>
                 <span class="lesson-description lesson-text">
          <p class="lesson-description-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nunc mauris, hendrerit a dapibus id, accumsan et metus. Nam euismod magna faucibus, laoreet neque in, auctor quam. Donec vestibulum nisl mollis, tempor leo non, molestie nunc. Morbi sollicitudin pellentesque risus.
          </p>
        </span>
      </div>
    </a>

    <a href="#" class="lesson-link">
      <div class="lesson">
        <span class="lesson-title lesson-text">Wordpress #2</span>
                 <span class="lesson-description lesson-text">
          <p class="lesson-description-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nunc mauris, hendrerit a dapibus id, accumsan et metus. Nam euismod magna faucibus, laoreet neque in, auctor quam. Donec vestibulum nisl mollis, tempor leo non, molestie nunc. Morbi sollicitudin pellentesque risus.
          </p>
        </span>
      </div>
    </a>
  <a href="#" class="lesson-link">
    <div class="lesson">
      <span class="lesson-title lesson-text">Wordpress #3</span>
             <span class="lesson-description lesson-text">
        <p class="lesson-description-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nunc mauris, hendrerit a dapibus id, accumsan et metus. Nam euismod magna faucibus, laoreet neque in, auctor quam. Donec vestibulum nisl mollis, tempor leo non, molestie nunc. Morbi sollicitudin pellentesque risus.
        </p>
      </span>
    </div>
  </a>

  </div>

<!--<footer>

    <span class="copyright-text">Copyright &copy; InfinityGreece</span>
    <span class="footer-buttons">
      <a href="#" class="footer-btn">Contact</a>
      <a href="#" class="footer-btn">Privacy Policy</a>
      <a href="#" class="footer-btn">About</a>


    </span>
  </footer> -->
  </body>
</html>
