<?php $title = "Register" ;
require_once __DIR__.'/../partials/_header.php';
?>

<div class="container">

    <form class="form-signin" action="/register" method="post" enctype="multipart/form-data">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <label for="inputFullName" class="sr-only">Full Name</label>
        <input type="text" id="inputFullName" class="form-control" name="full_name" placeholder="Full Name" required>


        <label for="inputAddress" class="sr-only">Address</label>
        <input type="text" id="inputAddress" class="form-control" name="address" placeholder="Address">

        <label for="inputMobileNumber" class="sr-only">Mobile Number</label>
        <input type="text" id="inputMobileNumber" class="form-control" name="mobile_number" placeholder="MobileNumber">

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>


        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>
    </form>

</div>



<?php require_once __DIR__.'/../partials/_footer.php';?>
