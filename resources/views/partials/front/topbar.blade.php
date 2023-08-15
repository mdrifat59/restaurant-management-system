<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 11PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li><button type="button" class="btn rounded-pill btn btn-outline-warning custom-btn px-4 text-light " data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Login</button></li>
          <li><button type="button" class="btn rounded-pill btn btn-outline-warning custom-btn px-4 text-light " data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Registration</button></li>
        </ul>
      </div>
    </div>
  </div>

  
  <!-- Registation Modal --> 
  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{route('public.store')}}" method="post"> 
          @csrf
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Registration Form</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-dark">
  
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example18">Name:</label>
              <input type="text" id="form2Example18" name="name" class="form-control form-control-lg" >
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example184">Phone Number:</label>
              <input type="number" id="form2Example184" name="phone" class="form-control form-control-lg" >
            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example18">Email address</label>
              <input type="email" id="form2Example18" name="email" class="form-control form-control-lg" >
            </div>
  
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example28">Password</label>
              <input type="password" id="form2Example28" name="password" class="form-control form-control-lg" >
            </div> 
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example28">Re-type Password</label>
              <input type="password" id="form2Example28" class="form-control form-control-lg" >
            </div> 
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Login Modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="#" method="post"> 
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Log in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">

          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example18">Email address</label>
            <input type="email" id="form2Example18" class="form-control form-control-lg" >
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example28">Password</label>
            <input type="password" id="form2Example28" class="form-control form-control-lg" >
          </div>

          {{-- <div class="pt-1 mb-4">
            <button class="btn btn-info btn-lg btn-block" type="button">Login</button>
          </div> --}}

          <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
          <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>