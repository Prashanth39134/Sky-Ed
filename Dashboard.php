<?php
session_start();
if($_SESSION['email'])
{

}
else{
  header("Location: login.html");
}?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="sty.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    </head>
  <body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Hi,There</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link">Courses</a></li>
                    <li class="nav__item"><a href="Sprofile.php" class="nav__link">Profile</a></li>
                    <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    <br>
   </section>
  <script src="https://unpkg.com/scrollreveal"></script>
</body>
</html>
