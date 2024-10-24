$.ajax({
    url: "create_order.php", // Your PHP file
    method: "POST",
    data: {
        product_id: productId, // ID of the product
        amount: 50000 // Amount in paise
    },
    success: function(response) {
        // Handle success
    },
    error: function(xhr, status, error) {
        // Handle error
    }
});
