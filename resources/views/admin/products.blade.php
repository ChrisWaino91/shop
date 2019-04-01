@extends ('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products</h1>
    <a href="/shop/admin/products/create"><button class="btn btn-primary">Add New Product</button></a>
  </div>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Title</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Sale Price</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($products as $product){
        ?><tr class='clickable-row' id='<?php echo $product->id ?>'>
          <th><a href='<?php echo $product->adminPath()?>'><?php echo $product->id?></a></th>
          <td><a href='<?php echo $product->adminPath()?>'><?php echo $product->title?></a></td>
          <td><a href='<?php echo $product->adminPath()?>'><?php echo $product->description?></a></td>
          <td><a href='<?php echo $product->adminPath()?>'><?php echo $product->price?></a></td>
          <td><a href='<?php echo $product->adminPath()?>'><?php echo $product->sale_price?></a></td>
        </tr>
      <?php
      } 
      ?>
    </tbody>
  </table>

@endsection