@extends ('layouts.header')

@section('content')
    <div class="content">

        <div class="jumbotron">
            <div class="container">
                <h1 class="h2">My Basket</h1>
            </div>
        </div>        


        <div class="container">
            <h2 class="h2 mb-5 text-center">Items</h2>
            <div class="row no-gutters">
               <div class="col single-product-image mr-4">
                    <table class="table basket-table mb-4">
                        <thead>
                        <tr>
                            <th scope="col">Reference</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product){
                                ?><tr>
                                    <th scope="row"><?php echo $product->product_id ?></th>
                                    <td><?php echo $product->product_title ?></td>
                                    <td><?php echo $product->product_price ?></td>
                                    <td>
                                        <form method="POST" action="/basket/delete/{{$product->id}}">
                                            {{ method_field('DELETE') }}
                                            @csrf
                                            <button type="submit" class="btn btn-light">Remove</button>
                                        </form>
                                        
                                    </td>
                                </tr> <?php
                            } ?>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col font-weight-bold">Grand Total: £<?php echo $total ?></th>
                                </tr>
                        </tbody>
                    </table>


                    <h2 class="h2 mt-4 mb-4">Checkout</h2>

                    <form action="/basket/confirmation" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="forename">Forename</label>
                            <input type="text" class="form-control" id="forename" name="forename" placeholder="Forename">
                        </div>
                        <div class="form-group">
                            <label for="Surname">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">
                        </div>
                        <div class="form-group">
                            <label for="forename">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="First Name">
                        </div>
                        <button type="submit" class="btn btn-primary">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
