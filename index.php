<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Daily Journal - Home</title>
    
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- favicon 
    <link rel="icon" href="img/logo.png" /> -->

   

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/blue.png" alt="logo" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto text-dark">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#gambar">Gallery</a>
                    </li>
                </ul>
            </div>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>

              <div class="theme_switcher">
                <input type="checkbox" id="themeToggle" onchange="ubahMode()">
               
            </div>
            <script>
                function ubahMode() {
                    const body = document.body;
                    body.classList.toggle("dark");
            
                    document.querySelector('.navbar').classList.toggle('dark');
                    document.querySelectorAll('.nav-link').forEach(link => link.classList.toggle('dark'));
                    document.querySelector('.hero').classList.toggle('dark');
                    document.querySelector('footer').classList.toggle('dark');
                    document.querySelectorAll('.card').forEach(card => card.classList.toggle('dark'));
                    document.querySelectorAll('.carousel-caption').forEach(caption => caption.classList.toggle('dark'));
                }
            </script>
            

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const themeToggle = document.getElementById('themeToggle');
        const isDarkMode = localStorage.getItem('darkMode') === 'true';
        
        if (isDarkMode) {
            ubahMode(); 
            themeToggle.checked = true;
        }

        themeToggle.addEventListener('change', () => {
            localStorage.setItem('darkMode', themeToggle.checked);
        });
    });
</script>
            
        </div>
    </nav>

   
    <!-- Gambar -->
    <section id="gambar">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Gambar1.jpg" class="d-block w-100" alt="Join AIESEC 2025">
            <div class="carousel-caption d-none d-md-block">
              <h5>Join AIESEC on 2023</h5>
              <p>Me and my team group F</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Gambar2.jpg" class="d-block w-100" alt="AFL Winter Peak 2023">
            <div class="carousel-caption d-none d-md-block">
              <h5>AFL Winter Peak 2023-2024</h5>
              <p>This is our team Maverick</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Gambar3.jpg" class="d-block w-100" alt="Walk4SGDS 2023">
            <div class="carousel-caption d-none d-md-block">
              <h5>Walk4SGDS 2024</h5>
              <p> me and my new friends</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Gambar4.jpg" class="d-block w-100" alt="Impact Circle 2024">
            <div class="carousel-caption d-none d-md-block">
              <h5>Impact Circle 2024</h5>
              <p>this is when my team, Sulley got a gift</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Gambar5.jpg" class="d-block w-100" alt="Join AIESEC 2024">
            <div class="carousel-caption d-none d-md-block">
              <h5>Join AIESEC 2024</h5>
              <p>And this is my new team at Join AIESEC now, Group I</p>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <br>

    <!-- Hero -->
    <section id="hero">
    <div class="container hero text-sm-start">
        
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h1 class="fw-bold display-5">Welcome to Diary of Taufan's Journey with AIESEC</h1>
                <br>
                <p class="lead display-7 text-center">- This is "My AIESEC diary" where my journey is written -</p>
                
            </div>
        </div>
    </div>
    </section>

    <br>

   <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <div class="d-flex justify-content-center mb-3">
                <a href="" class="h2 p-2 text-dark"><i class="bi bi-instagram"></i></a>
                <a href="" class="h2 p-2 text-dark"><i class="bi bi-twitter"></i></a>
                <a href="" class="h2 p-2 text-dark"><i class="bi bi-whatsapp"></i></a>
            </div>
            <div>
                <p class="text-dark">&copy; 2025 Taufan's Journal</p>
            </div>
        </div>
    </footer>
    

</body>
</html>
