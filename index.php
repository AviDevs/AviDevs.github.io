<section class="vh-100" style="background-color:#5F9EA0 ;">
    <?php
    if(isset($errors['login'])){
        echo $errors['login'];
    }
    ?>
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 35px;">
                    <div class="card-body p-md-5" style="background-color: #FFEBCD;">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                                <form class="mx-1 mx-md-4" method='POST'>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input value='admin@gmail.com' name="email" type="email" id="form3Example3c"
                                                class="form-control" />
                                            <label class="form-label" for="form3Example3c">Your Email</label> <br>
                                            <?php
                        if(isset($errors['email'])){
                            echo '<span class="text-danger">'.$errors['email'].'</span>';
                        }
                      ?>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input value='12345678' name="password" type="password" id="form3Example4c"
                                                class="form-control" />
                                            <label class="form-label" for="form3Example4c">Password</label> <br>
                                            <?php
                      if(isset($errors['password'])){
                          echo '<span class="text-danger">'.$errors['password'].'</span>';
                      }
                    ?>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" name="login" class="btn btn-lg"
                                            style='background-color: #eb4b4b !important; color: white !important'>Login</button>
                                    </div>

                                    <a class="link-primary" href="signup.php">Signup</a>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="asset/image/Why are Micro-interactions Important in WordPress Themes.gif" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
