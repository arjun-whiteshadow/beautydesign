<?php include('header.php') ?>

<main id="login-page">
    <section class="common-banner-section" style="background-image: url('img/banner/green-bg.jpg');">
        <div class="custom-container">
            <div class="common-banner-content">
                <h1>Sign In</h1>
                <ul class="breadcrumbs-section">
                    <li><a href="index.php">Home</a> / </li>
                    <li>sign in</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="common-signup-section login-section">
        <form action="" class="login-form">
            <h2>Sign In</h2>
            <p class="info-text">Insert your account information:</p>
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <p class="bottom-text" style="margin-top: 6rem;">Forgot Your Password? <a href="">Click Here</a></p>
            <p class="bottom-text">If you don't have an account, please <a href="register.php">Register Here</a></p>
            <button type="submit" class="common-btn-2 submit-btn login-btn">Login</button>
            <div class="divider">
                <span>OR</span>
            </div>
            <div class="signin-options">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                    Continue with Facebook
                </a>
                <a href="#">
                    <i class="fab fa-google"></i>
                    Continue with Google
                </a>
            </div>
        </form>
    </section>

</main>

<?php include('footer.php') ?>