@extends ('layouts.dashboard')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>


<form method="POST" action="/admin/departments/{{$department->id}}" style="display:inline;"> 
  @csrf
  @method('patch')
  <div class="form-group">
      <label for="department_title">Department Title</label>
      <input type="text" class="form-control" id="department_title" name="department_title" value="<?php echo $department->name ?>">
  </div>
  <div class="form-group">
      <label for="department_description">Department Description</label>
      <input type="text" class="form-control" id="department_description" name="department_description" value="<?php echo $department->description ?>">
  </div>
  <button type="submit" class="btn btn-primary">Save Department</button>
</form>
<form method="POST" action="/admin/departments/{{$department->id}}" style="display: inline;">
  {{ method_field('DELETE') }}
  @csrf
  <button type="submit" class="btn btn-danger">Delete Department</button>
  <a href="/admin"><button class="btn btn-light">Cancel</button></a>
</form>

@endsection