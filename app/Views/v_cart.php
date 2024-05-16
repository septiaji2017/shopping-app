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
            <h1 class="text-center">Cart Page</h1>
            <div class="card my-4">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Foto Barang</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama Barang</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jumlah</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Harga</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Sub Total</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody id="cart-body">
                            <?php if (!empty($cart)): ?>
                                <?php
                                $total = 0;
                                foreach ($cart as $index => $item):
                                    $itemTotal = $item['harga'] * $item['quantity'];
                                    $total += $itemTotal;
                                    ?>
                                    <tr data-index="<?= $index ?>" data-harga="<?= $item['harga'] ?>">
                                        <td class="align-middle text-center" style="max-width: 100px; max-height: 100px;"><img
                                                src="/photos/<?= $item['photo'] ?>" alt="img-blur-shadow"
                                                class="img-fluid shadow border-radius-lg"></td>

                                        <td class="align-middle text-center"><?= $item['name'] ?></td>
                                        <td class="align-middle text-center">
                                            <form method="post" action="/cart/update_quantity">
                                                <button class="btn btn-sm btn-outline-secondary quantity-change mt-3"
                                                    name="change" value="-1">-</button>
                                                <span class="mx-2 quantity"><?= $item['quantity'] ?></span>
                                                <button class="btn btn-sm btn-outline-secondary quantity-change mt-3"
                                                    name="change" value="1">+</button>
                                                <input type="hidden" name="index" value="<?= $index ?>">
                                            </form>
                                        </td>
                                        <td class="align-middle text-center">Rp
                                            <?= number_format($item['harga'], 0, ',', '.') ?>
                                        </td>
                                        <td class="align-middle text-center subtotal">Rp
                                            <?= number_format($itemTotal, 0, ',', '.') ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <form method="post" action="/cart/delete_item">
                                                <button class="btn btn-sm btn-primary delete-item" type="submit">Delete</button>
                                                <input type="hidden" name="index" value="<?= $index ?>">
                                            </form>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center">Your cart is empty.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php if (!empty($cart)): ?>
                <div class="d-flex flex-column align-items-end">
                    <h4>Total: <span id="total">Rp <?= number_format($total, 0, ',', '.') ?></span></h4>
                    <form method="post" action="/cart/clear" class="mt-2">
                        <button type="submit" class="btn btn-primary">Clear Cart</button>
                    </form>
                </div>
            <?php endif; ?>
            <div class="d-flex justify-content-between">
                <a href="/" class="btn btn-danger mt-3">Back to Home</a>
                <a href="/checkout" class="btn btn-success mt-3 ml-auto">Checkout</a>
            </div>
        </div>
    </section>

    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>


<?= $this->endSection() ?>