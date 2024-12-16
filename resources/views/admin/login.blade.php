<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Trip Share Admin</title>
        
        <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/typicons/typicons.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/js/select.dataTables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <body>
                
        <div class="container py-5 my-5">
            
            <div class="row justify-content-center">
                
                <div class="col-md-4">
                    
                    <div class="card">
                        
                        <div class="card-body">

                            <div class="text-center mb-3">
                                <img src="{{ asset('images/logo.png') }}" class="w-50">
                                <h3 class="my-3">Login Here</h3>
                            </div>
                            @if(Session::has('danger'))
                                <div class="alert alert-danger">
                                    {{ Session::get('danger') }}
                                </div>
                            @endif
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form action="{{ route('checkadminlogin') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Emal</label>
                                    <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-dark w-100">Login</button>
                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
        
        
        <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
        
        
        <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
        <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('admin/js/template.js') }}"></script>
        <script src="{{ asset('admin/js/settings.js') }}"></script>
        <script src="{{ asset('admin/js/todolist.js') }}"></script>
        
        
        <script src="{{ asset('admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('admin/js/Chart.roundedBarCharts.js') }}"></script>
        
    </body>
</html>