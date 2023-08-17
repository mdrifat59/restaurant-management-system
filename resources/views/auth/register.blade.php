<html>
    <head>
        <style>
            .gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="{{route('register')}}" method="post">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" required autofocus autocomplete="name" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" required autocomplete="username"/>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label> 
                  <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" required autocomplete="new-password" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" name="password_confirmation" id="form3Example4cdg" class="form-control form-control-lg" required autocomplete="new-password" />
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body px-5">Registration</button>
                    {{-- <a href="{{url('/login')}}" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body px-5">Registration</a> --}}
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{url('/login')}}"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>
</html>