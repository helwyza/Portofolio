<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link rel="icon" href="/img/svg/h-solid.svg">
  <!-- <link rel="stylesheet" href="/css/style.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://kit.fontawesome.com/94a9986f18.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    .bd-masterhead {
      padding-top: 3rem;
      background: linear-gradient(165deg, #ece7f5 40%, #fff 60%);
    }

    .fadeInUp {
      opacity: 0;
      animation: fadeInUp 2s forwards;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <header class="navbar navbar-expand-md navbar-dark bd-navbar sticky-top" style="background:linear-gradient(175deg,#6f42c1 50%,#7e43e9 50% );">
  <nav class="container-xxl flex-wrap flex-md nowrap">
    <a href="" class="navbar-brand p-0 mx-5">Helwiza Fahry</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0 ms-5">
        <li class="nav-item col-4 col-md-auto mx-auto "><a href="<?= base_url('/'); ?>" class="nav-link p-2 active">Home</a></li>
        <li class="nav-item col-6 col-md-auto mx-auto "><a href="<?= base_url('About'); ?>" class="nav-link p-2">Resume</a></li>
        <li class="nav-item col-4 col-md-auto mx-auto "><a href="" class="nav-link p-2">Services</a></li>
        <li class="nav-item col-6 col-md-auto mx-auto "><a href="<?= base_url('/contact-me'); ?>" class="nav-link p-2">Contact Me</a></li>
      </ul>
    </div>
  </nav>
</header>
  <main>

    <div class="bd-masterhead mb-3 ">
      <div class="container px-4 px-md-3">
        <div class="row align-item-lg-center">
          <div class="bd-masterhead mb-3">

    <section id="Banner">
        <div class="container px-4 px-md-3 mb-5">
            <div class="row align-item-lg-center">
                <div class="col-8 mx-auto col-md-5 col-lg-4 order-md-2">
                    <img src="/img/img.png" class="img-fluid mb-3 mb-md-0 rounded-circle fadeInUp">
                </div>
                <div class="col-lg-7 order-md-1 col-md-7 text-center text-md-start mt-lg-5 my-auto">
                    <h1 class="mb-4 fs-1 fadeInUp">Hi Everyone, I'am <br><strong>Helwyza</strong></h1>
                    <p class="lead mb-4 fs-2 fadeInUp">I'am a <strong><span class="efek-ngetik"></span></strong></p>

                </div>
            </div>
        </div>
    </section>
    <section id="about" class="row">
        <div class="container px-4 px-md-5 mt-5 ">
            <div class="row justify-content-center d-flex">
                <div class="col mb-3 text-center text-md-start px-md-5 ms-md-3 ms-lg-5">
                    <h1>About Me</h1>
                </div>
            </div>
            <div class="row align-item-center mt-3 ">
                <div class="col-5 col-md-5 col-lg-3  mx-auto ">
                    <img src="/img/img2.jpg" alt="" class="img-fluid rounded mb-3 mb-md-0">
                </div>
                <div class="col-lg-7 col-md-7 text-center text-md-start">
                    <h2 class="d-inline-block ms-0 pt-0">Helwiza Fahry</h2>
                    <p class="d-flex ms-0 text-muted fs-4">- Student of Computer Engineering at Batam Institute of Technology -</p>
                    <p class="d-flex ms-0 text-muted fs-6 fst-italic">
                        <emp>"I always push my self to beyond the limit, naturally corius about new technology and always wannna improve my skills. "</emp>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- <div class="container masterhead-followup px-4 px-md-3">
    <section class="row mb-5 pb-md-4 align-item-center"></section>
</div> -->


<div class="container px-4 px-md-5 mt-0 mb-2 mb-md-3 mt-md-0">
    <div class="row justify-content-center">
        <div class="col-6 col-md-5">
            <hr style="border: stripped grey;">
        </div>
    </div>
</div>

<section id="skills">
    <div class="container px-4 px-md-5 ">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class=" fst-bold">Skills</h2>
            </div>
        </div>
        <div class="row align-item-center mx-auto justify-content-center">
            <div class="col-3 mx-auto col-md-3 mb-5">
                <img src="/img/svg/030-html-5.svg" alt="" class="img-fluid ms-lg-5">
            </div>
            <div class="col-3 col-md-3 mb-5">
                <img src="/img/svg/027-php.svg" alt="" class="img-fluid ms-lg-5">
            </div>
            <div class="col-3 col-md-3 mb-5">
                <img src="/img/svg/029-javascript.svg" alt="" class="img-fluid ms-lg-5">
            </div>
            <div class="col-3 col-md-3 mb-5">
                <img src="/img/svg/021-mysql.svg" alt="" class="img-fluid ms-lg-5">
            </div>
            <div class="col-3 col-md-3 mb-5">
                <img src="/img/svg/031-css.svg" alt="" class="img-fluid ms-lg-5">
            </div>
            <div class="col-3 col-md-3 mb-5">
                <img src="/img/svg/003-java.svg" alt="" class="img-fluid ms-lg-5">
            </div>
            <div class="col-3 col-md-3 mb-5">
                <img src="/img/svg/ci42.png" alt="" class="img-fluid ms-lg-4" width="170px">
            </div>
            <div class="col-3 col-md-3 mb-5">
                <img src="/img/svg/bst.png" alt="" class="img-fluid ms-lg-4" width="170px">
            </div>
        </div>
    </div>
</section>
        </div>
      </div>
    </div>

   <!-- Footer -->
<section id="footer">


    <footer class="bg-light py-5">
        <div class="container px-3">
            <div class="row">
                <div class="col-sm-8 col-md-5">
                    <h5>About Us</h5>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit mauris a
                        cursus congue.
                    </p>
                </div>
                <div class="col-6 col-sm-4 col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="<?= base_url(); ?>" class="text-muted">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-muted">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="text-muted">Services</a>
                        </li>
                        <li>
                            <a href="#" class="text-muted">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-sm-6 col-md-4">
                    <h5>Contact Me</h5>
                    <ul class="list-unstyled">
                        <li>
                            <img src="/img/svg/whatsapp.svg" alt="" class="img-fluid me-2" width="20px">
                            (+62) 822-7164-8395
                        </li>
                        <li>
                            <i class="fa fa-envelope me-2"></i>
                            helwyza@gmail.com
                        </li>
                        <li>
                            <img src="/img/svg/instagram.svg" alt="" class="img-fluid me-2" width="20px">
                            @helwyza_13
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</section>

<!-- Bootstrap core JavaScript -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-Zxa0+0vT2d+zT6U06q3hrwlGUhEwi1M/xmnQAe0NxH8k4kI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- <script src="https://kit.fontawesome.com/94a9986f18.js" crossorigin="anonymous"></script> -->
  <script>
    function previewImg() {
      const sampul = document.querySelector('#sampul');
      const imgPreview = document.querySelector('.img-preview');
      const fileSampul = new FileReader();
      fileSampul.readAsDataURL(sampul.files[0]);
      fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
    const txtElement = ['Programmer', 'Web Developer', 'Graphic Designer'];
    let count = 0;
    let txtIndex = 0;
    let currentTxt = '';
    let words = '';

    (function ngetik() {

      if (count == txtElement.length) {
        count = 0;
      }

      currentTxt = txtElement[count];

      words = currentTxt.slice(0, ++txtIndex);
      document.querySelector('.efek-ngetik').textContent = words;

      if (words.length == currentTxt.length) {
        count++;
        txtIndex = 0;
      }

      setTimeout(ngetik, 500);

    })();

    var fadeInUp = document.querySelector('.fadeInUp');
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          fadeInUp.classList.add('visible');
          observer.unobserve(fadeInUp);
        }
      });
    });
    observer.observe(fadeInUp);
  </script>
</body>

</html>
