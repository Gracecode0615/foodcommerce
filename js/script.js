$(document).ready(function () {

    let quantity = 1;
    let unitPrice = 500;
    let cartCount = 0; // 🛒 total items added to cart

    function updateUI() {
        $('.count-display').text(quantity);
        $('.action button').text('Add NGN ' + (unitPrice * quantity).toLocaleString());
    }

    // Show popup on preview click
    $('.add').click(function () {
        // Optional: get actual data from clicked item
        const title = $(this).find('h2').text();
        const img = $(this).find('img').attr('src');
        const priceText = $(this).find('p').text().replace(/[^\d]/g, '');
        const price = parseInt(priceText) || 500;

        unitPrice = price;
        quantity = 1;

        $('#food-detail h2').text(title); // ensure it targets only popup title
        $('#food-detail img').attr('src', img);
        $('#food-detail .price').text('NGN ' + unitPrice.toLocaleString());

        updateUI();

        $('#food-detail').fadeIn();
    });

    // Increase quantity
    $('.increase').click(function () {
        quantity++;
        updateUI();
    });

    // Decrease quantity
   $('.decrease').click(function () {
    if (quantity > 1) {
        quantity--;
        updateUI();

        // Reduce cart count by 1 if it's greater than 0
        if (cartCount > 0) {
            cartCount--;
            $('.add-to-cart span').text(cartCount);
        }
    }
});

    // Add to cart (increase cart count by 1 only)
$('.action button').click(function () {
    cartCount += 1; // Always add 1 to cart count
    $('.add-to-cart span').text(cartCount);
});

    // Close popup
    $('.close-popup').click(function () {
        $('#food-detail').fadeOut();
    });

    // Home page click to view page
    $('.flex-wrap .col').on('click', function () {
        window.location.href = 'viewpage';
    });

    // Close food popup (if using #foodPopup elsewhere)
    $('.close-popup').click(function () {
        $('#food-detail').fadeOut();
    });

});
