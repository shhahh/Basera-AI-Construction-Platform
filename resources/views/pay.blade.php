<!DOCTYPE html>
<html>
<head>
    <title>Basera Constructions Payment</title>
</head>
<body>

    <h2>Pay ₹500 Advance</h2>

    <button id="rzp-button1">Pay Now</button>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
        var options = {
            "key": "{{ config('services.razorpay.key') }}",   // ✅ FIXED HERE
            "amount": 50000,
            "currency": "INR",
            "name": "Basera Constructions",
            "description": "Advance Payment",
            "order_id": "{{ $orderId }}",

            "handler": function (response){
                fetch("/payment-success", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(response)
                });

                alert("Payment Successful ✅");
            }
        };

        var rzp1 = new Razorpay(options);
        document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
    </script>

</body>
</html>
