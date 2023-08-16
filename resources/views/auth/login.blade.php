<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-75">
              <div class="row d-flex justify-content-center align-items-center h-75">
                <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                  <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body px-5 pt-2 pb-5">
          
                      <form action="{{route('login')}}">
                        <div class="mb-md-1 mt-md-4 pb-5">
          
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
              
                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typeEmailX">Email:</label>
                              <input type="email" id="typeEmailX" name="email" value="{{old('email')}}" class="form-control form-control-lg " />
                            </div>
              
                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="typePasswordX">Password:</label>
                              <input type="password" id="typePasswordX" name="password" value="{{old('password')}}" class="form-control form-control-lg" />
                            </div>
              
                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember" />
                                {{-- <label class="form-check-label" for="remember_me"> Remember password </label> --}}
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>    
                            </div>
                            
                            <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </div>
                        @if (Route::has('password.request'))
                            
                        <p class="small  pb-lg-2"><a class="text-white-50" href="{{route('password.request')}}">Forgot password?</a></p>
                        @endif
                    </form>
          
                      <div>
                        <p class="mb-0">Don't have an account? <a href="{{route('register')}}" class="text-white-50 fw-bold">Sign Up</a>
                        </p>
                      </div>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>