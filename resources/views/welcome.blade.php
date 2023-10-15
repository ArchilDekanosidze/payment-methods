<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Integration</title>
</head>
<body>

    <h2>Product: Mobile Phone</h2>
    <h3>Price: $199</h3>

    <div style="margin-bottom:10px;">
        <form action="{{ route('paypal') }}" method="post">
        @csrf
        <input type="hidden" name="price" value="199">
        <button type="submit">Pay With PayPal</button>
        </form>
    </div>

    <div style="margin-bottom:10px;">
        <form action="{{ route('stripe') }}" method="post">
        @csrf
        <input type="hidden" name="price" value="199">
        <button type="submit">Pay With Stripe</button>
        </form>
    </div>
    
</body>
</html>