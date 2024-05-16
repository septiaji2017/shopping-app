<?= $this->extend('v_template'); ?>

<?= $this->section('header') ?>
<div class="page-header min-vh-75" style="background-image: url('./assets/img/scc-10.png');">
  <span class="mask bg-gradient-dark opacity-6"></span>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center mx-auto my-auto">
        <h2 class="text-white">Welcome To Squidward Community Shop! The Right Choice.</h2>
        <p class="lead mb-4 text-white opacity-8"></p>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">

  <!-- Section with LATEST NEWS -->
  <section class="py-7">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Latest Product</h3>
        </div>
      </div>
      <div class="row">
        <?php foreach ($products as $product): ?>
          <div class="col-lg-3 col-sm-6">
            <div class="card mb-5" data-animation="false">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="/photos/<?= $product['foto'] ?>" alt="img-blur-shadow"
                    class="img-fluid shadow border-radius-lg">
                </a>
                <div class="colored-shadow"
                  style="background-image: url(&quot;https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg&quot;);">
                </div>
              </div>
              <div class="card-body text-center">
                <h5 class="font-weight-normal mt-3">
                  <a href="javascript:;"><?php echo $product['nama_barang']; ?></a>
                </h5>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer d-flex">
                <p class="font-weight-normal my-auto">Rp <?php echo number_format($product['harga'], 0, ',', '.'); ?></p>
                <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">shopping_cart</i>
                <form method="post" action="/cart/add/<?= $product['id_barang'] ?>">
                  <input type="hidden" name="photo" value="<?= $product['foto'] ?>">
                  <button type="submit">Add to Cart</button>
                </form>

              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>
<?= $this->endSection() ?>