@extends ('layouts.header')

@section('content')
    <div class="content">


        <div class="container product-page">
            <div class="breadcrumbs">
                <span class="breadcrumb-home"><a href="/">Home</a></span><span class="separator"> > </span><span class="breadcrumb-department"><a href="<?php echo $product->department->path()?>"><?php echo $product->department->name ?></a></span>
            </div>
            <div class="row no-gutters top-product-content">
               <div class="col single-product-image mr-4">
                <img src="<?php echo asset($product->imagePath()) ?>" alt="<?php echo $product->title ?>">
               </div>
               <div class="col d-flex flex-column">
                    <form method="POST" action="/basket/add" enctype="multipart/form-data"> 
                        @csrf
                        <input type="hidden" id="product_id" name="product_id" value="<?php echo $product->id ?>">
                      
                    <div class="single-product-info p-2 mt-auto mb-auto ml-4">
                        <div class="single-product-title">
                            <h2><?php echo $product->title ?></h2>
                            <input type="hidden" id="product_title" name="product_title" value="<?php echo $product->title ?>">
                        </div>
                        <div class="single-product-descripton p-2">
                                <h5><?php echo $product->description ?></h5>
                            </div>
                        <div class="single-product-price p-2">
                            <p>£<?php echo $product->sale_price ?></p>
                            <input type="hidden" id="sale_price" name="sale_price" value="<?php echo $product->sale_price ?>">
                        </div>
                        <div class="add-to-basket p-2" id="add-to-basket">
                            <button class="btn-primary btn">Add To Basket</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
