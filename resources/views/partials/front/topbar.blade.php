<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 11PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        @guest
        <ul>
          <li><a href="{{route('login')}}"><button type="button" class="btn rounded-pill btn btn-outline-warning custom-btn px-4 text-light " >Login</button></a></li>
          <li><a href="{{route('register')}}"><button type="button" class="btn rounded-pill btn btn-outline-warning custom-btn px-4 text-light " >Registration</button></a></li>
        </ul>
        @endguest
        @auth
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <a href="{{route('logout')}}" class="btn rounded-pill btn btn-outline-warning custom-btn px-4 text-light "  onclick="event.preventDefault();
          this.closest('form').submit();" >{{ __('Log Out') }}</a>
      </form>
        @endauth
      </div>
    </div>
  </div>