//resources/views/auth/register.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin 2 - Register</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 
  <!-- Custom styles for this template-->
  <link href="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">edit the content</h1>
              </div>
              <form action="{{url('customer-update')}}" method="POST" class="user">
                @csrf
                <div class="form-group">
                  <input name="id" type="text" class="form-control form-control-user @error('id')is-invalid @enderror" value="{{$user->id}}" placeholder="Id">
                  @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" value="{{$user->name}}" placeholder="Name">
                  @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" value="{{$user->email}}" placeholder="Email Address">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input name="mobile" type="tel" class="form-control form-control-user @error('mobile')is-invalid @enderror" value="{{$user->mobile}}" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                <input type="checkbox" name="gender[]" value="male">
                <label for="vehicle1"> Male</label><br>
                <input type="checkbox" name="gender[]" value="female" checked>
                <label for="vehicle2"> Female</label><br>  
                </div>
                <div class="form-group">
                  <input type="text" name="post" class="form-control form-control-user" value="{{$user->post}}" placeholder="Post">
                </div>
                <div class="form-group">
                  <input type="text" name="current_sal" class="form-control form-control-user " value="{{$user->current_sal}}" placeholder="Current Salary">
                </div>
                <div class="form-group">
                  <input type="text" name="comapny" class="form-control form-control-user " value="{{$user->comapny}}"	 placeholder="Company">
                </div>
                <div class="form-group">
                  <input type="text" name="expected_sal" class="form-control form-control-user " value="{{$user->expected_sal}}" placeholder="expected salary">
                </div>
                
                <button type="submit"  class="btn btn-primary btn-user btn-block">Edit</button>
              </form>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
  </div>
  
</html>


<br>
<br>
