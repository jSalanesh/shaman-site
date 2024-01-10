<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shaman Shawarma</title>
    <link rel="shortcut icon" href="img/shaman-logo.png" type="image/x-icon">
    <!-- css includes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
            include "navbar.html";
        ?>
    <div class="container-fluid text-center text-bg-dark pb-3">
        <about class="row pt-5">
            <h1>About Us</h1>
            <div class="row">
                <div class="col-md-6">
                    <h2>What we offer</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod voluptate molestias laudantium
                        totam quo, explicabo sunt blanditiis delectus itaque necessitatibus repellendus esse rem quos
                        qui? Impedit eaque reiciendis officia! Numquam.
                        Ipsam impedit consectetur voluptatibus a est quo obcaecati excepturi, dolore illo porro
                        voluptatem veniam, exercitationem repudiandae corrupti velit officiis. Saepe non veniam libero!
                        Facere enim aspernatur dolorem quidem harum eligendi.
                        Aliquid itaque dicta, autem minima iste dolor sapiente ipsam dolorum eius ducimus ut? Amet fuga
                        nostrum iure accusantium non maiores natus quidem provident eius vitae? Minima provident ab quod
                        voluptate?
                        Beatae doloremque facilis officia commodi neque exercitationem modi! Ipsum, vel nisi accusamus
                        atque eum id. Minima saepe deserunt odit voluptate atque optio earum aperiam commodi quibusdam.
                        Nam veniam dolorem facilis!
                        Ex a possimus fuga architecto alias ad? Sapiente, numquam. Porro harum voluptate et earum
                        quidem, ipsam repellendus, deserunt maiores consequuntur fuga omnis recusandae. Reiciendis iure
                        fugit cupiditate perferendis ipsa maxime.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/shaman-background.jpg" alt="food offerings" style="width:30rem;">
                </div>
            </div>
        </about>
        <div class="row">
          <h1>Where We Are</h1>
        </div>
        <div id="branchCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="img/bacayan-branch.jpg" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Bacayan Branch</h2>
                        <p>Our first location.</p>
                        <a href="http://" class="text-light">Google Maps</a>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="img/talamban-branch.jpg" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Talamban Branch</h2>
                        <p>Our second location.</p>
                        <a href="http://" class=" text-light">Google Maps</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#branchCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#branchCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <?php
        include "contact.html";
        ?>
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>