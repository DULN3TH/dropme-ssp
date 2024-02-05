<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pizza Hut</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/seller.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>

    <h1>Welcome to Pizza Hut</h1>

    <div class="pizza-container">
        <div class="pizza">
            <img src="images/m-pizza.jpg" alt="Margherita Pizza">
            <div class="pizza-info">
                <p>Margherita Pizza</p>
                <p>Classic tomato and mozzarella topped with fresh basil.</p>
                <p><strong>Rs.2400</strong></p>
                <a href="#" class="add-to-cart" onclick="addToCart('Margherita Pizza', 12.99)">Add to Cart</a>
            </div>
        </div>

        <div class="pizza">
            <img src="images/p-pizza.jpg" alt="Pepperoni Pizza">
            <div class="pizza-info">
                <p>Pepperoni Pizza</p>
                <p>Loaded with pepperoni and extra cheese for a savory experience.</p>
                <p><strong>Rs.2450</strong></p>
                <a href="#" class="add-to-cart" onclick="addToCart('Pepperoni Pizza', 14.99)">Add to Cart</a>
            </div>
        </div>

        <div class="pizza">
            <img src="images/v-pizza.jpg" alt="Vegetarian Pizza">
            <div class="pizza-info">
                <p>Vegetarian Pizza</p>
                <p>Fresh vegetables, mushrooms, and olives on a bed of mozzarella.</p>
                <p><strong>Rs.1850</strong></p>
                <a href="#" class="add-to-cart" onclick="addToCart('Vegetarian Pizza', 13.99)">Add to Cart</a>
            </div>
        </div>

        <div class="pizza">
            <img src="images/c-pizza.jpg" alt="Chicken Pizza">
            <div class="pizza-info">
                <p>Chicken Pizza</p>
                <p>Chicken, ketchup and mozzarella for a cheesy chicken experience</p>
                <p><strong>Rs.2300</strong></p>
                <a href="#" class="add-to-cart" onclick="addToCart('Chicken Pizza', 13.99)">Add to Cart</a>
            </div>
        </div>
    </div>

    <a href="#" class="view-cart" onclick="viewCart()">View Cart</a>

    <div class="modal" id="cartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Your Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="cartDetails">
                    <!-- Cart items will be displayed here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" onclick="clearCart()">Clear Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free html
                    Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        function addToCart(itemName, itemPrice) {
            // Retrieve the existing cart items from localStorage
            let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

            // Add the new item to the cart
            cartItems.push({ name: itemName, price: itemPrice });

            // Save the updated cart back to localStorage
            localStorage.setItem('cart', JSON.stringify(cartItems));
        }

        function viewCart() {
            // Retrieve the cart items from localStorage
            let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

            // Display cart items in the modal
            let cartDetails = $('#cartDetails');
            cartDetails.empty();

            if (cartItems.length > 0) {
                for (let i = 0; i < cartItems.length; i++) {
                    cartDetails.append(`<p>${cartItems[i].name} - $${cartItems[i].price.toFixed(2)}</p>`);
                }
            } else {
                cartDetails.append('<p>Your cart is empty.</p>');
            }

            // Open the cart modal
            $('#cartModal').modal('show');
        }

        function clearCart() {
            // Clear the cart in localStorage
            localStorage.removeItem('cart');

            // Close the cart modal
            $('#cartModal').modal('hide');
        }
    </script>
</body>

</html>
