@extends ('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Departments</h1>
    <a href="/shop/admin/department/create"><button class="btn btn-primary">Add New Department</button></a>
  </div>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Department Title</th>
        <th scope="col">Number of Products</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($departments as $department){
        ?><tr class='clickable-row' id='<?php echo $department->id ?>'>
          <th><a href='<?php echo $department->adminPath()?>'><?php echo $department->id?></a></th>
          <td><a href='<?php echo $department->adminPath()?>'><?php echo $department->name?></a></td>
          <td><a href='<?php echo $department->adminPath()?>'><?php echo $department->product->count()?></a></td>
        </tr>
      <?php
      } 
      ?>
    </tbody>
  </table>

@endsection