@extends ('layouts.header')

@section('content')
    <div class="content">
        <div class="jumbotron">
            <div class="container">
                <h1 class="h2">Order Complete!</h1>
            </div>
        </div>  
        <div class="container">
            <div class="mb-4">
                <h3>Your Order Has Been Completed Successfully!</h3>
            </div>      
            <div>
                <p>Thank you for your order, <strong><?php echo $forename ?></strong>, your order reference is <strong><?php echo $order_id ?></strong>
                    and you will recieve an order confirmation email shortly.</p>
            </div>
        </div>
    </div>
@endsection
