<?= $this->extend('v_template'); ?>

<?= $this->section('header') ?>
<div class="page-header min-height-400" style="background-image: url('../assets/img/music.png');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto">
                <h2 class="text-white">At Squidward Community College we offer only the best Music courses.</h2>
                <p class="lead mb-4 text-white opacity-8">Singer? Guitarist? Piano player? Looking to tune your skills
                    and add a new string to your bow in the music industry? This is the course for you! This Music
                    course will allow you to develop as both an individual artist.</p>
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
                This course offers students the opportunity to develop their musical, technical and listening skills
                over their course of study through a process of self-evaluation, practice and review, which are key
                skills.

                During your study, you will focus on developing an audio portfolio, allowing you to demonstrate
                everything you have learnt during your time with us. Squidward Tentacles himself will review your work
                and hand deliver you with a certificate for all of your hard work.
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