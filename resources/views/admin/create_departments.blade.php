@extends ('layouts.dashboard')

@section('content')
  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Department</h1>
        <a href="/shop/admin/departments/"><button class="btn btn-light">Cancel</button></a>
    </div>
    
    <form method="POST" action="/shop/admin/departments" enctype="multipart/form-data"> 
        @csrf
        <div class="form-group">
            <label for="department_title">Department Title</label>
            <input type="text" class="form-control" id="department_title" name="department_title" placeholder="Department Title">
            <small id="department_title_help" class="form-text text-muted">This is the main title of the department that will appear across your site.</small>
        </div>
        <div class="form-group">
            <label for="department_description">Department Description</label>
            <input type="text" class="form-control" id="department_description" name="department_description" placeholder="Department Description">
            <small id="department_description_help" class="form-text text-muted">Here you can write a little information about the department in question that will display on the department landing page.</small>
        </div>
        <button type="submit" class="btn btn-primary">Create Department</button>
        <a href="/shop/admin/departments/"><button class="btn btn-light">Cancel</button></a>
    </form>

@endsection


