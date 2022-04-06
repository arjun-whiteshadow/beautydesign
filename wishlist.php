<?php include('header.php') ?>

<main id="wishlist-page">

    <section class="common-banner-section" style="background-image: url('img/banner/green-bg.jpg');">
        <div class="custom-container">
            <div class="common-banner-content">
                <h1>Page Wishlist</h1>
                <ul class="breadcrumbs-section">
                    <li><a href="index.php">Home</a> / </li>
                    <li>page wishlist</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="wishlist-section">
        <div class="custom-container">
            <table class="common-table table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">
                            <i class="bi bi-heart-fill"></i> Product
                        </th>
                        <th scope="col">
                            <img src="img/icons/rupee.png" alt=""> Price
                        </th>
                        <th scope="col">
                            <i class="bi bi-trash"></i> Remove
                        </th>
                        <th scope="col">
                            <i class="bi bi-bag"></i> Add to cart
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="flex-td">
                            <div class="image">
                                <img src="img/product-description/1.jpg" alt="">
                            </div>
                            <a href="product-description.php" class="title">
                                Hydrating Leave-On Gel Primer
                            </a>
                        </td>
                        <td>
                            <div class="price">NRP. 1250</div>
                        </td>
                        <td>
                            <button class="remove-btn">
                                <i class="bi bi-trash"></i>Remove
                            </button>
                        </td>
                        <td>
                            <button class="add-to-cart-btn">
                                <i class="bi bi-bag"></i>add to cart
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="flex-td">
                            <div class="image">
                                <img src="img/product-description/1.jpg" alt="">
                            </div>
                            <a href="product-description.php" class="title">
                                Hydrating Leave-On Gel Primer
                            </a>
                        </td>
                        <td>
                            <div class="price">NRP. 1250</div>
                        </td>
                        <td>
                            <button class="remove-btn">
                                <i class="bi bi-trash"></i>Remove
                            </button>
                        </td>
                        <td>
                            <button class="add-to-cart-btn">
                                <i class="bi bi-bag"></i>add to cart
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="common-buttons-wrapper">
                <a href="#" class="first-btn">Continue Shopping</a>
                <a href="#" class="second-btn">Proceed to Checkout</a>
            </div>

        </div>
    </section>

</main>

<?php include('footer.php') ?>