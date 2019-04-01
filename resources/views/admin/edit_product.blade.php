@extends ('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>



<form method="POST" action="/shop/admin/products/{{$product->id}}" style="display:inline;">
  @csrf
  @method('patch')
  <div class="form-group">
      <label for="product_title">Product Title</label>
      <input type="text" class="form-control" id="product_title" name="product_title" value="<?php echo $product->title ?>">
  </div>
  <div class="form-group">
      <label for="product_description">Product Description</label>
      <input type="text" class="form-control" id="product_description" name="product_description" value="<?php echo $product->description ?>">
  </div>
  <div class="form-row" style="margin-bottom: 1rem;">
      <label for="product_prices" style="width:100%;">Product Prices</label>
      <div class="col">
          <input type="number" class="form-control" id="price" name="price" value="<?php echo $product->price ?>">
      </div>
      <div class="col">
          <input type="number" class="form-control" id="sale_price" name="sale_price" value="<?php echo $product->sale_price ?>">
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
  </div>
  <div class="form-group">
      <label for="product_image">Upload A New Image</label>
      <input type="file" class="form-control-file" id="product_image" name="product_image">
  </div>
  <button type="submit" class="btn btn-primary">Save Product</button>
</form>
<form method="POST" action="/shop/admin/products/{{$product->id}}" style="display: inline;">
  {{ method_field('DELETE') }}
  @csrf
  <button type="submit" class="btn btn-danger">Delete Product</button>
  <a href="/shop/admin"><button class="btn btn-light">Cancel</button></a>
</form>

@endsection