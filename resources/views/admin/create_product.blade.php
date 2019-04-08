@extends ('layouts.dashboard')

@section('content')
  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Product</h1>
        <a href="/admin/products/"><button class="btn btn-light">Cancel</button></a>
    </div>
     
    <form method="POST" action="/admin/products" enctype="multipart/form-data"> 
        @csrf
        <div class="form-group">
            <label for="product_title">Product Title</label>
            <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Product Title">
            <small id="product_title_help" class="form-text text-muted">This is the main title of the product that will appear across your site.</small>
        </div>
        <div class="form-group">
            <label for="product_description">Product Description</label>
            <input type="text" class="form-control" id="product_description" name="product_description" placeholder="Product Description">
            <small id="product_description_help" class="form-text text-muted">Here you can write a little information about the product that will display on the product page.</small>
        </div>
        <div class="form-row" style="margin-bottom: 1rem;">
            <label for="product_prices" style="width:100%;">Product Prices</label>
            <div class="col">
                <input type="number" class="form-control" id="price" name="price" placeholder="Standard Price">
            </div>
            <div class="col">
                <input type="number" class="form-control" id="sale_price" name="sale_price" placeholder="Sale Price">
            </div>
        </div>
        <div class="form-group">
            <label for="product_department">Product Department</label>
            <select class="form-control" id="product_department" name="product_department">
                <?php foreach ($departments as $department){?>
                <option value="<?php echo $department->id?>"><?php echo $department->name ?></option>
                <?php
                }?>
            </select>
            <small id="product_department_help" class="form-text text-muted">Assign the product to a department. The department must be created beforehand.</small>
        </div>
        <div class="form-group">
            <label for="product_image">Upload An Image</label>
            <input type="file" class="form-control-file" id="product_image" name="product_image">
            <small id="product_image_help" class="form-text text-muted">Recommended Size: 350px x 350px; must be an aspect ratio of 1:1.</small>
        </div>
        <button type="submit" class="btn btn-primary">Create Product</button>
        <a href="/admin/products/"><button class="btn btn-light">Cancel</button></a>
    </form>

@endsection


