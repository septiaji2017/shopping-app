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
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sub Total</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
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
                                        <td class="align-middle text-center"><?= $item['name'] ?></td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-sm btn-outline-secondary quantity-change mt-3" data-change="-1">-</button>
                                            <span class="mx-2 quantity"><?= $item['quantity'] ?></span>
                                            <button class="btn btn-sm btn-outline-secondary quantity-change mt-3" data-change="1">+</button>
                                        </td>
                                        <td class="align-middle text-center">Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
                                        <td class="align-middle text-center subtotal">Rp <?= number_format($itemTotal, 0, ',', '.') ?></td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-sm btn-primary delete-item">Delete</button>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cartBody = document.getElementById('cart-body');
    const totalElement = document.getElementById('total');
    let total = <?= $total ?>;

    cartBody.addEventListener('click', function(event) {
        if (event.target.classList.contains('quantity-change')) {
            const button = event.target;
            const change = parseInt(button.getAttribute('data-change'));
            const tr = button.closest('tr');
            const index = tr.getAttribute('data-index');
            const harga = parseInt(tr.getAttribute('data-harga'));
            const quantityElement = tr.querySelector('.quantity');
            let quantity = parseInt(quantityElement.textContent) + change;

            if (quantity < 1) {
                quantity = 1;
            }

            quantityElement.textContent = quantity;
            const subtotal = quantity * harga;
            tr.querySelector('.subtotal').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(subtotal);

            // Update total
            updateTotal();
        }

        if (event.target.classList.contains('delete-item')) {
            const button = event.target;
            const tr = button.closest('tr');
            const index = tr.getAttribute('data-index');

            tr.remove();

            // Update total
            updateTotal();
        }
    });

    //untuk update total
    function updateTotal() {
        total = 0;
        cartBody.querySelectorAll('tr').forEach(function(row) {
            const rowQuantity = parseInt(row.querySelector('.quantity').textContent);
            const rowHarga = parseInt(row.getAttribute('data-harga'));
            total += rowQuantity * rowHarga;
        });
        totalElement.textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(total);
    }

    //Fungsi untuk update bisa dengan menambah atau mengurangi item
    function updateCart(index, quantity) {
        fetch('/cart/update', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-Token': '<?= csrf_token() ?>'
            },
            body: JSON.stringify({ index: index, quantity: quantity })
        });
    }

    //Fungsi untuk delete per carf item
    function deleteCartItem(index) {
        fetch('/cart/delete', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-Token': '<?= csrf_token() ?>'
            },
            body: JSON.stringify({ index: index })
        });
    }
});
</script>

<?= $this->endSection() ?>