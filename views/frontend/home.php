<?php require_once __DIR__.'/../partials/_header.php';?>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Pizza Hut</h1>
            <p class="lead text-muted">Welcome to our restaurant .</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <?php foreach ($products as $product): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="/product/<?php echo $product->slug;?>">
                            <img src="<?php echo $product->photo; ?>" alt="<?php echo $product->name ?>">
                        </a>
                        <div class="card-body">
                            <p class="card-text"><?php echo $product->name; ?></p>
                            <p class="card-text"><?php echo $product->description; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button"  class="btn btn-sm btn-outline-secondary">View</button>
                                    <form action="/cart" method="post">
                                        <input type="hidden" name="id" value="<?php echo $product->id;?>">
                                        <button type="button" class="btn btn-success btn-block" name="add">Add to cart</button>
                                    </form>

                                </div>
                                <small class="text-muted">BDT <?php echo $product->price;?> </small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</main>


<?php require_once __DIR__.'/../partials/_footer.php'; ?>
