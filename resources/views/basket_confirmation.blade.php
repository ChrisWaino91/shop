@extends ('layouts.header')

@section('content')
    <div class="content">

       v


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
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product){
                                ?><tr>
                                    <th scope="row"><?php echo $product->product_id ?></th>
                                    <td><?php echo $product->product_title ?></td>
                                    <td><?php echo $product->product_price ?></td>
                                </tr> <?php
                            } ?>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col font-weight-bold">Grand Total: £<?php echo $total ?></th>
                                </tr>
                        </tbody>
                    </table>

                    <h2 class="h2 mt-4 mb-4">Delivery Details</h2>
                    <table class="table confirmation-table mb-4">
                        <thead>
                            <tr>
                                <th scope="col">Forename</th>
                                <th scope="col">Surname</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Total Payment Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $customer_info[0]->forename; ?></th>
                                <td><?php echo $customer_info[0]->surname; ?></td>
                                <td><?php echo $customer_info[0]->email;  ?></td>
                                <td><?php echo '£' . $total; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="confirm-purchase mt-4">
                        <form action="/basket/success" method="POST">
                            @csrf
                            <input type="hidden" name="forename" value="<?php echo $customer_info[0]->forename;?>">
                            <input type="hidden" name="surname" value="<?php echo $customer_info[0]->surname;?>">
                            <input type="hidden" name="email" value="<?php echo $customer_info[0]->email;?>">
                            </div>
                            <button type="submit" class="btn btn-primary m-auto">Confirm Purchase</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
