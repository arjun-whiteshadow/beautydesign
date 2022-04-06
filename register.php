<?php include('header.php') ?>

<main id="register-page">

    <section class="common-banner-section" style="background-image: url('img/banner/green-bg.jpg');">
        <div class="custom-container">
            <div class="common-banner-content">
                <h1>Register an Account</h1>
                <ul class="breadcrumbs-section">
                    <li><a href="index.php">Home</a> / </li>
                    <li>register account</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="common-signup-section register-section">
        <form action="" class="register-form">
            <h2>Create an Account</h2>
            <p class="info-text">Insert your account information:</p>
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
            </div>
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <i class="fas fa-paper-plane"></i>
                <input type="text" class="form-control" name="address" id="address" placeholder="Address">
            </div>
            <div class="form-group">
                <i class="fas fa-phone"></i>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Contact Number">
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" name="password" id="password" placeholder="Set Password">
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" class="form-control" name="password" id="password" placeholder="Confirm Password">
            </div>
            <p class="bottom-text">If you have an account, please <a href="login.php">Login Here</a></p>
            <button type="submit" class="common-btn-2 submit-btn">register now</button>
        </form>
    </section>
</main>

<?php include('footer.php') ?>