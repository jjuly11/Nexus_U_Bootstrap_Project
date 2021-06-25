<?php
    include "includes/header.php";
?>
<section class="mb-5" >
    <div class="card">
        <div class="card-img bg-dark" style="height:50vh;"></div>
        <!-- <img src="img/luca-bravo-zAjdgNXsMeg-unsplash.jpg" alt="" class="card-img"> -->
        <div class="card-img-overlay text-center text-white">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="bg-white d-inline-block w-50 header-title rounded-top">
                            <div class="fs-2 my-auto text-dark">
                                Login
                            </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</section>
<!-- Closeing Header -->
<section>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
<?php

include "includes/footer.php";

?>