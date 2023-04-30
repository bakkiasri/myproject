<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin 2 - Dashboard</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script> 
  <script src="{{ asset('frontend/js/bootstrap5.bundle.min.js') }}"></script> 
  @yield('scripts')
  <!-- Custom styles for this template-->
  <link href="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css">
    <title>Butterfly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8{
  height:600px;
  width:400px;
}
</style>


</head>


<body class="flex justify-center">

  <div>
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
 <!-- Sidebar - Brand -->
 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
   <div class="sidebar-brand-icon rotate-n-15">
     <i class="fas fa-laugh-wink"></i>
   </div>
   <div class="sidebar-brand-text mx-3">Admin dash<sup>board</sup></div>
 </a>

 <!-- Divider -->
 <hr class="sidebar-divider my-0">

 <!-- Nav Item - Dashboard -->
 <li class="nav-item">
   <a class="nav-link" href="{{ (url('butterfly')) }}">
     <i class="fas fa-fw fa-tachometer-alt"></i>
     <span>Dashboard</span></a>
 </li>

 

   

 <!-- Divider -->
 <hr class="sidebar-divider d-none d-md-block">

 <!-- Sidebar Toggler (Sidebar) -->
 <div class="text-center d-none d-md-inline">
   <button class="rounded-circle border-0" id="sidebarToggle"></button>
 </div>

 <!-- Sidebar Message -->
 
</ul>
  </div>
    
    
<div class="table-responsive">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Mobile
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Gender
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Expected Salary
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Current salary
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Current Company
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Applying for Post
              </th>

            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($users as $user)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $user->name}}
                    </div>
                    
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $user->email}}
                    </div>
                    
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $user->mobile}}
                    </div>
                    
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $user->gender}}
                    </div>
                    
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $user->expected_sal}}
                    </div>
                    
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $user->current_sal}}
                    </div>
                    
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $user->comapny}}
                    </div>
                    
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $user->post}}
                    </div>
                    
                  </div>
                </div>
              </td>
              
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                
                <a id="delete" href="{{url('sample')}}/{{$user->id}}" class="text-red-500 hover:text-red-800 mx-5">Delete</a>
              
                <a id="myBtn"  data-bs-target="myModal" class="btn btn-info" href="{{url('sample2')}}/{{$user->id}}">Edit</a>
                </td>
            </tr>
            <!-- More people... -->
            @endforeach
          </tbody>
        </table>
        

            <!-- Modal content -->
                <div id="myModal" class="modal" data-bs-target="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  
                  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  
                  <span class="close">&times;</span>
                  </div>
                  <div class="modal-body">

                  <form>
                  <form action="{{url('customer-save')}}" method="POST" class="user">
                @csrf
                <div class="form-group">
                  <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" value="{{old('name')}}" placeholder="Name">
                  @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" value="{{old('email')}}" placeholder="Email Address">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <input name="mobile" type="tel" class="form-control form-control-user @error('mobile')is-invalid @enderror" value="{{old('mobile')}}" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                <input type="checkbox" name="gender[]" value="male">
                <label for="vehicle1"> Male</label><br>
                <input type="checkbox" name="gender[]" value="female">
                <label for="vehicle2"> Female</label><br>  
                </div>
                <div class="form-group">
                  <input type="text" name="post" class="form-control form-control-user" value="{{old('post')}}" placeholder="Post">
                </div>
                <div class="form-group">
                  <input type="text" name="current_sal" class="form-control form-control-user " value="{{old('current_sal')}}" placeholder="Current Salary">
                </div>
                <div class="form-group">
                  <input type="text" name="comapny" class="form-control form-control-user " value="{{old('comapny')}}"	 placeholder="Company">
                </div>
                <div class="form-group">
                  <input type="text" name="expected_sal" class="form-control form-control-user " value="{{old('expected_sal')}}" placeholder="expected salary">
                </div>
                
                <button type="submit"  class="btn btn-primary btn-user btn-block">Register Account</button>
              </form>     
                  </form>

                  
                  </div>
                  </div>
                  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
                   <!--end model content-->         
                

            
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <a href="{{ (url('butterfly')) }}">
            <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Create New
            </button>
          </a>
        </div>
        
      </div>
    </div>
  </div>
</div>


</body>
</html>

