<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
  <body>
    <header>
      <nav class="navbar-light bg-light">
        <div class="container-fluid">
           <div class="row">
             <div class="col-md-3">
               <ul class="navbar-nav">
                 <li class="nav-item">
                   <a class="nav-link" href="index.php">Home</a>
                 </li>
               </ul>

             </div>
             <div class="col-md-6 text-center">
               <a href="#" class="navbar-brand">MONOSCOPE</a>
             </div>
             <div class="col-md-3 text-end">
               <button class="navbar-toggler first-button border-0 btn" type="button" data-bs-toggle="collapse"
                      data-mdb-target="#navbarToggleExternalContent9" data-bs-target="#navbarToggleExternalContent"
                      aria-controls="navbarToggleExternalContent9" aria-expanded="false"
                      aria-label="Toggle navigation">
                      <div class="animated-icon1"><span></span><span></span><span></span></div>
                </button>

               <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button> -->
             </div>
             <div class="collapse" id="navbarToggleExternalContent">
               <div class="container-fluid">
                <nav class="bg-light p-4 navbar-light">
                  <div class="d-flex justify-content-center">
                    <div class="nav-item"><a href="about.php" class="nav-link text-secondary">About Us</a></div>
                    <div class="nav-item"><a href="login.php" class="nav-link text-secondary">Login</a></div>
                    <div class="nav-item"><a href="gallery.php" class="nav-link text-secondary">Gallery</a></div>
                    <div class="nav-item"><a href="contact.php" class="nav-link text-secondary">Contact</a></div>
                  </div>
                </nav>
               </div>
             </div>
           </div>

        </div>

      </nav>
    </header>
