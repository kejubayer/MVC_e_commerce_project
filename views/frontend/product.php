<?php $title = "Product";
require_once __DIR__.'/../partials/_header.php'; ?>

<main role="main">
    <div class="container">
        <br>
        <p class="text-center"><?php echo $product->name; ?></p>
        <hr>

        <div class="card">
            <div class="row">
                <aside class="col-sm-5 border-right">
                    <article class="gallery-wrap">
                        <div>
                            <img src="https://via.placeholder.com/348x225/0000FF" class="card-img-top" alt="<?php echo $product->name;?>">
                        </div>
                    </article>
                </aside>

                <aside class="col-sm-7">
                    <article class="card-body p-5">
                        <h3 class="title mb-3"><?php echo $product->name; ?></h3>

                        <p class="price-detail-wrap">
                            <span class="price h3 text-warning">
                                <span class="currency">BDT </span>
                                <span class="num">
                                    <?php echo $product->price; ?>
                                </span>
                            </span>
                        </p>

                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd><p><?php echo $product->description; ?></p></dd>
                        </dl>
                        <hr>

                        <form action="/cart" method="post">
                            <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                            <button type="submit" class="btn btn-lg btn-outline-primary text-uppercase">
                                Add to Cart
                            </button>
                        </form>
                    </article>
                </aside>
            </div>
        </div>

    </div>
</main>


<?php require_once __DIR__.'/../partials/_footer.php'; ?>
