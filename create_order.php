<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <button id="buy-now" data-product-id="1" data-amount="50000">Buy Now</button>

    <script src="script.js"></script> <!-- Your script file -->
    <script>
        $('#buy-now').click(function() {
            const productId = $(this).data('product-id');
            const amount = $(this).data('amount');

            $.ajax({
                url: "create_order.php", // Your PHP file
                method: "POST",
                data: {
                    product_id: productId, // ID of the product
                    amount: amount // Amount in paise
                },
                success: function(response) {
                    // Handle success (e.g., process the order details)
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error("Error:", error);
                }
            });
        });
    </script>
</body>
</html>
