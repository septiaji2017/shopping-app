<?= $this->extend('v_template'); ?>

<?= $this->section('header') ?>
<div class="page-header min-height-400" style="background-image: url('../assets/img/artgalery.png');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto">
                <h2 class="text-white">How To Get Your Artwork In The Gallery</h2>
                <p class="lead mb-4 text-white opacity-8">You can send your artwork to us via email or text message using our contact details, you can find them here. <span><a class="text-info " href=<?= base_url('/contact') ?>>contact</a></span> </p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->

    <!-- Section with LATEST NEWS -->
    <section class="py-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-5">Art Made By Our Students (Sorted Newest To Oldest)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="../assets/img/arts-by-comm/gal_51.webp"
                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                            </a>
                            <div class="colored-shadow"
                                style="background-image: url('../assets/img/arts-by-comm/gal_51.webp');">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="d-flex justify-content-center mt-n6 mx-auto">
                                <button class="btn btn-link text-info border-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Download">
                                    <i class="material-icons text-lg">download</i>
                                </button>
                            </div>
                            <h5 class="font-weight-normal mt-3">
                                <a href="javascript:;">Squidward Strike</a>
                            </h5>
                            <p class="mb-0">
                            Squidward fighting against the evil money hungry Mr.Krabs to get a good pay and good working conditions.
                            </p>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer d-flex">
                            <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">person</i>
                            <p class="text-sm my-auto"> Ian Dennis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="../assets/img/arts-by-comm/gal_56.webp"
                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                            </a>
                            <div class="colored-shadow"
                                style="background-image: url('../assets/img/arts-by-comm/gal_56.webp');">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="d-flex justify-content-center mt-n6 mx-auto">
                                <button class="btn btn-link text-info border-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Download">
                                    <i class="material-icons text-lg">download</i>
                                </button>
                            </div>
                            <h5 class="font-weight-normal mt-3">
                                <a href="javascript:;">[Unnamed]</a>
                            </h5>
                            <p class="mb-0">
                            [No Description Provided]
                            </p>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer d-flex">
                            <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">person</i>
                            <p class="text-sm my-auto"> [Unknown]</p>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-sm-6">
                    <div class="card" data-animation="true">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <img src="../assets/img/arts-by-comm/gal_55.webp"
                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                            </a>
                            <div class="colored-shadow"
                                style="background-image: url('../assets/img/arts-by-comm/gal_55.webp');">
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="d-flex justify-content-center mt-n6 mx-auto">
                                <button class="btn btn-link text-info border-0" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Download">
                                    <i class="material-icons text-lg">download</i>
                                </button>
                            </div>
                            <h5 class="font-weight-normal mt-3">
                                <a href="javascript:;">[Unnamed]</a>
                            </h5>
                            <p class="mb-0">
                            [No Description Provided]
                            </p>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer d-flex">
                            <i class="material-icons position-relative ms-auto text-lg me-1 my-auto">person</i>
                            <p class="text-sm my-auto"> [Unknown]</p>
                        </div>
                    </div>
                </div>                                   
            </div>
        </div>
    </section>

    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>
<?= $this->endSection() ?>