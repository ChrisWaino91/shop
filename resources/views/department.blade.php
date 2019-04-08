@extends ('layouts.header')

@section('content')
    <div class="content">

        <div class="jumbotron">
            <div class="container department-page">
                <h1 class="h2"><?php echo $department->name?></h1>
                <p class="department-description"><?php echo $department->description?></p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">
                    <?php foreach($products as $product){
                        ?><div class="card product-card col-md-4 mx-2 text-center">
                          <a href="<?php echo $product->path() ?>"><img class="card-img-top" src="<?php echo asset($product->imagePath())?>" alt="Product Image"></a>
                              <div class="card-body">
                                  <h5 class="card-title product-title"><?php echo $product->title; ?></h5>
                                  <?php if(isset($product->sale_price) && $product->sale_price < $product->price){ echo '<div class="card-text product-sale-price"><p>NOW: £' . $product->sale_price . '</p></div>'; }  ?>
                                  <div class="card-text product-price"><p><?php echo '£' . $product->price; ?></p></div>
                                  <div class="buttons" >
                                      <a href="<?php echo $product->path() ?>" class="btn btn-primary">Purchase</a>
                                      <a href='<?php echo $product->path() ?>' class="btn btn-light">View</a>
                                  </div>
                              </div>
                          </div>
                      <?php } ?>
            </div>
        </div>
    </div>
@endsection
