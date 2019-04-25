<?php $title = "Login" ;
require_once __DIR__.'/../partials/_header.php';
?>

<main role="main" class="login-page">
    <div class="container">
        <form action="/login" method="post" >
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
<script src="/assets/js/jquery-3.3.1.slim.min.js"></script>

<?php require_once __DIR__.'/../partials/_footer.php'; ?>