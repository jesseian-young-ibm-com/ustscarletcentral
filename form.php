<?php
include "./includes/header.php";
?>

<div class="container">

    <form class="login-member" method="post" action="form_handler.php">
       <p class="login-text" style="font-size: 2rem; font-weight: 800,"> MEMBER LOGIN </p>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        
        <button class="btn-mem" type="submit" >Login</button>
    </form>

</div>


<?php
include "./includes/footer.php";
?>