<?php $title = "Register" ;
require_once __DIR__.'/../partials/_header.php';
?>

<div class="container">

    <form class="form-signin" action="user_register.php" method="post" enctype="multipart/form-data">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
        <label for="inputFirstName" class="sr-only">First Name</label>
        <input type="text" id="inputFirstName" class="form-control" name="first_name" placeholder="First Name" required>

        <label for="inputLastName" class="sr-only">Last Name</label>
        <input type="text" id="inputLastName" class="form-control" name="last_name" placeholder="Last Name" required>

        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>

        <label for="inputPhoto" class="sr-only">Photo</label>
        <input type="file" name="photo" class="form-control" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>
    </form>

</div>



<?php require_once __DIR__.'/../partials/_footer.php';?>
