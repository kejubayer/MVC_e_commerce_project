<?php require_once __DIR__.'/../partials/_header.php';?>

<main role="main">
    <div class="container">
        <br>
        <p class="text-center">Cart</p>
        <hr>

        <div class="row">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <td>Sl.</td>
                        <td>Product Title</td>
                        <td>Quantity</td>
                        <td>Unit Price</td>
                        <td>Total Price</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>BDT </td>
                            <td>BDT </td>
                            <td>
                                <form action="cart.php" method="post">
                                    <input type="hidden" name="id" value="">
                                    <button type="submit" name="delete" class="btn btn-sm btn-danger" >
                                        [X]
                                    </button>
                                </form>
                                <form action="cart.php" method="post">
                                    <input type="hidden" name="id" value="">
                                    <button type="submit" name="decrease" class="btn btn-sm btn-danger" >
                                        [-]
                                    </button>
                                </form>
                            </td>
                        </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total Price</td>
                        <td>BDT </td>
                        <td>
                            <a href="checkout.php" class="btn btn-success">Checkout</a>
                            <form action="cart.php" method="post">
                                <button type="submit" name="clear" class="btn btn-sm btn-danger" >
                                    [X]
                                </button>
                            </form>
                        </td>
                    </tr>

                    </tbody>
                </table>

        </div>

    </div>
</main>

<?php require_once __DIR__.'/../partials/_footer.php'; ?>