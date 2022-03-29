@extends(config('usercrud.admin_app_layouts'))
@section('title', 'User')
@section('content')
    
    @php
        $pageTitle = isset($editData) && !empty($editData) ? "Edit User" : "Create User"; 
    @endphp
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $pageTitle }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">user</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto">
            
            <div class="card card-primary">
              <!-- form start -->
              <form method="POST" action="{{ isset($editData) && !empty($editData) ? route('usercrud::admin.user.edit', $editData->id) : route('usercrud::admin.user.create') }}" class="needs-validation">
                @csrf
                @if(isset($editData) && !empty($editData))
                    @method('PUT')
                @endif
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ (isset($editData) && !empty($editData->name)) ? $editData->name : old('name') }}" placeholder="Enter Name" required >
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ (isset($editData) && !empty($editData->email)) ? $editData->email : old('email') }}" placeholder="Enter Email" required >
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter Password" >
                  </div>
                  <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ (isset($editData) && !empty($editData->contact_number)) ? $editData->contact_number : old('contact_number') }}" placeholder="Enter Contact Number" required >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>  
  
@endsection
@section('scripts')
  
@endsection