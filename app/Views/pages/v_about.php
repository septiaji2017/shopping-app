<?= $this->extend('v_template'); ?>

<?= $this->section('header') ?>
<div class="page-header min-height-400" style="background-image: url('../assets/img/SCC.webp');" loading="lazy">
  <span class="mask bg-gradient-dark opacity-8"></span>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
  <!-- START Testimonials w/ user image & text & info -->
  <section class="py-sm-7 py-5 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="mt-n8 mt-md-n9 text-center">
            <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="../assets/img/squid-square.png"
              alt="bruce" loading="lazy">
          </div>
          <div class="row py-5">
            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h3 class="mb-0">Squidward Tentacles</h3>
                <div class="d-block">
                  <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-auto">
                  <span class="h6">SquidwardCC</span>
                  <span>Founder</span>
                </div>
              </div>
              <p class="text-lg mb-0">
              Before becoming a college, it was home to Sir Skidlord Tentakill The First (also known as "The Pretentious"), who used to tutor villagers of Bikineth Bottometh during his spare time. He was one of the greatest underwater kings (and also musicians) to have ever lived above and underwater, before he went mad and threatened to wage war against the surface.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Testimonials w/ user image & text & info -->
  <!-- START Blogs w/ 4 cards w/ image & text & link -->
  <!-- END Blogs w/ 4 cards w/ image & text & link -->
</div>
<?= $this->endSection() ?>