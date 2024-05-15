<?= $this->extend('v_template'); ?>

<?= $this->section('header') ?>
<div class="page-header min-height-400" style="background-image: url('../assets/img/finance.png');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto">
                <h2 class="text-white">At Squidward Community College we offer only the best Finance courses.</h2>
                <p class="lead mb-4 text-white opacity-8">This course is designed to help you to develop highly-skilled
                    support staff in the fields of finance and accountancy.</p>
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
                You will study a range of subjects such as advanced bookkeeping, final accounts preperation, management
                accounting costing, indirect tax and speadsheets for accounting.

                This course will cover the type of work typically completed by an Finance person, including basic
                bookkeeping activities and working with sales and purchase ledgers.
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