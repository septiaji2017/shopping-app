<?= $this->extend('v_template'); ?>

<?= $this->section('header') ?>
<div class="page-header min-height-400" style="background-image: url('../assets/img/bg10.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto">
                <h2 class="text-white">At Squidward Community College we offer only the best Architecture courses.</h2>
                <p class="lead mb-4 text-white opacity-8">This is a hands-on and theoretical course where you will learn
                    the basic skills to prepare you for a career as a bricklayer in the construction industry. It’s
                    designed for students who have a desire and ambition to become a tradesperson in the construction
                    industry.</p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->

    <!-- Section with LATEST NEWS -->
    <!-- Section with LATEST NEWS -->
    <section class="py-7">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-3">What You Will Learn On This Course</h3>
                </div>
            </div>
            <p>
                In this course you will learn the craftmanship behind the iconic shape and uniqe look and feel of the
                founders house, Squidward Tenacles. His house is one of a kind you you now have an oppertunity to learn
                how to be as good as Squidward.

                This course allows students to learn, develop and practice the skills required for employment and/or
                career progression in Bricklaying.
            </p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-3">How To Apply</h3>
                </div>
            </div>
            <p>
                To apply for this course you will need to provide proof of your outstanding grades. Please provide us
                with a short statement of why you think you should be accepted to study at Squidward Community College.
            </p>
        </div>
    </section>

    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>
<?= $this->endSection() ?>