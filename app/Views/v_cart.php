<?= $this->extend('v_template'); ?>

<?= $this->section('header') ?>
<div class="page-header min-vh-75" style="background-image: url('<?= asset('img/scc-10.png') ?>');">
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
            <h1>Cart Page</h1>
            <!-- <ul> -->
            <div class="card my-4">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>

                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama Barang</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jml</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Total</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($cart)): ?>
                                <?php
                                $total = 0;
                                foreach ($cart as $item):
                                    $itemTotal = $item['harga'] * $item['quantity'];
                                    $total += $itemTotal;
                                    ?>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <?= $item['name'] ?> - <?= $item['harga'] ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <?= $item['quantity'] ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <?= $item['harga'] * $item['quantity'] ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li>Your cart is empty.</li>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <?php if (!empty($cart)): ?>
                <h4>Total: <?= $total ?></h4>
            <?php endif; ?>
            <!-- </ul> -->
            <form method="post" action="/cart/clear">
                <button type="submit">Clear Cart</button>
            </form>
            <a href="/">Back to Home</a>
        </div>
    </section>

    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>

<?= $this->endSection() ?>