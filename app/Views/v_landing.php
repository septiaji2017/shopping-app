<?= $this->extend('v_template'); ?>

<?= $this->section('header') ?>
<div class="page-header min-vh-75" style="background-image: url('./assets/img/scc-10.png');">
  <span class="mask bg-gradient-dark opacity-6"></span>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center mx-auto my-auto">
        <h2 class="text-white">Welcome To Squidward Community College! The Right Choice.</h2>
        <p class="lead mb-4 text-white opacity-8">Enroll in a world-class institution with Squidward Community College
          where you learn the skills you need to succeed in the workplace and have the future you deserve.</p>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
  <!-- Section with four info areas left & one card right with image and waves -->
  <section class="pt-7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="">Our Courses</h3>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="row justify-content-start">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-3xl text-gradient text-primary mb-3">brush</i>
                <h5>Art</h5>
                <p>Our Art course allows students to follow in the steps of our founder.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-3xl text-gradient text-primary mb-3">music_note</i>
                <h5>Music</h5>
                <p>In this course students will learn original music on the clarinet.</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-start mt-4">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-3xl text-gradient text-primary mb-3">payments</i>
                <h5>Finance</h5>
                <p>In the founders dark days he worked as a cashier, this course passes the founders knowledge down.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-3xl text-gradient text-primary mb-3">settings</i>
                <h5>Architecture</h5>
                <p>The found wants to pass on his vast knowledge of Architecture.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
          <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <a class="d-block blur-shadow-image">
                <img src="./assets/img/artgalery-reg.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">
              </a>
            </div>
            <div class="card-body text-center">
              <h5 class="font-weight-normal">
                <a href="javascript:;">Registration</a>
              </h5>
              <p class="mb-2">
                There's something for everyone at SCC! Whatever your aims and ambitions are, we guarantee we have a
                course for you!
              </p>

              <p>


                To enroll into a course at Squidward CC, you must contact us and let us know. You must have only the top
                grades as this is what we expect from our students.
              </p>
              <button type="button" class="btn bg-gradient-primary btn-sm mb-0 mt-3">Apply Now!</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section with LATEST NEWS -->
  <section class="py-7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Latest News</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="./assets/img/ExamResults2022.webp" alt="img-blur-shadow"
                  class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Exam Results 2022</a>
              </h5>
              <p>
                Our 2022 exam results are now live! Read the article for more information. […]
              </p>
              <a href="javascript:;" class="text-primary text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="./assets/img/Gallery2.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                  loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Gallery Submissions Back Open!</a>
              </h5>
              <p>
                The Squidward CC in-house gallery is now accepting new art peices. Please visit the gallery for more
                details. […]
              </p>
              <a href="javascript:;" class="text-primary text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="./assets/img/Exams2022.webp" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg"
                  loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Exams 2022</a>
              </h5>
              <p>
                Squidward CC students begin to take their exams next week. Exam timetables have been handed out. […]
              </p>
              <a href="javascript:;" class="text-primary text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- END Section with four info areas left & one card right with image and waves -->
  <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
  <section class="pb-5 position-relative bg-gradient-dark mx-n3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">College Alumni</h3>
          <p class="text-white opacity-8 mb-0">Squidward Community College are very proud of our alumni and their
            achievements.</p>
          <p class="text-white opacity-8 mb-0">The alumni relations office have gathered some statements from our past
            alumni which can be viewed below.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="./assets/img/squid-square.png" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-2">Squidward Tentacles</h5>
                  <p class="mb-2"><i>"I attended this world class institution and now I run it."</i></p>
                  <p class="mb-0">Studied our world class Applied Economics: Cash Register Application Programme (CRAP)
                    course in 1986.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="./assets/img/keanu-kotak.png" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-2">Keanu Reeves</h5>
                  <p class="mb-2"><i>"Cyberpunk 2076 is a good game."</i></p>
                  <p class="mb-0">Studied our world class Acting 101 course in 1980.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-4 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="./assets/img/alex-square.png" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-2">Alexander Pierce</h5>
                  <p class="mb-2"><i>"SquidwardCC unlocked my passion for computing."</i></p>
                  <p class="mb-0">Studied our world class Computer Science course in 1998.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="card card-profile mt-lg-4 mt-5 z-index-2">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 mt-n5">
                <a href="javascript:;">
                  <div class="p-3 pe-md-0">
                    <img class="w-100 border-radius-md shadow-lg" src="./assets/img/bobross-square.png" alt="image">
                  </div>
                </a>
              </div>
              <div class="col-lg-8 col-md-6 col-12 my-auto">
                <div class="card-body ps-lg-0">
                  <h5 class="mb-2">Bob Ross</h5>
                  <p class="mb-2"><i>"My time at SquidwardCC made me a happy little tree."</i></p>
                  <p class="mb-0">Studied our world class Art course in 1941.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
  <section class="pt-4 pb-6" id="count-stats">
    <div class="container">
      <div class="row mb-7">
        <div class="col-lg-2 col-md-4 col-6 mb-4">
          <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-coinbase.svg" alt="logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-4">
          <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-nasa.svg" alt="logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-4">
          <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-netflix.svg" alt="logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-4">
          <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-pinterest.svg" alt="logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-4">
          <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-spotify.svg" alt="logo">
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-4">
          <img class="w-100 opacity-7" src="./assets/img/logos/gray-logos/logo-vodafone.svg" alt="logo">
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-3">
          <h1 class="text-gradient text-primary" id="state1" countTo="5234">0</h1>
          <h5>Students</h5>
          <p>That meets quality standards required by large companies</p>
        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-primary"><span id="state2" countTo="150">0</span>+</h1>
          <h5>Teachers</h5>
          <p>Of “high-performing” level are led by a certified teachers</p>

        </div>
        <div class="col-md-3">
          <h1 class="text-gradient text-primary"><span id="state3" countTo="4">0</span></h1>
          <h5>Courses</h5>
          <p>Actively engage</p>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  <section class="my-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <h4>Join Us!</h4>
          <p class="mb-4">
            Join the Squidward Community College forum today! Registrations now open to the public!
          </p>
          <div class="row">
            <div class="col-8">
              <div class="input-group input-group-outline">
                <label class="form-label">Email Here...</label>
                <input type="text" class="form-control mb-sm-0">
              </div>
            </div>
            <div class="col-4 ps-0">
              <button type="button"
                class="btn bg-gradient-primary mb-0 h-100 position-relative z-index-2">Subscribe</button>
            </div>
          </div>
        </div>
        <div class="col-md-5 ms-auto">
          <div class="position-relative">
            <img class="max-width-50 w-100 position-relative z-index-2" src="./assets/img/macbook.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>
<?= $this->endSection() ?>