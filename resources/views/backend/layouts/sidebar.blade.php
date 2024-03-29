  <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-light navbar-light">
          <a href="index.html" class="navbar-brand mx-4 mb-3">
              <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
          </a>
          <div class="d-flex align-items-center ms-4 mb-4">


              @auth
                  <div class="position-relative">
                      <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                      <div
                          class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                      </div>
                  </div>
                  <div class="ms-3">
                      <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                      <span>Admin</span>
                  </div>
              </div>
              <div class="navbar-nav w-100">
                  <a href="{{ route('order-item.index') }}" class="nav-item nav-link active"><i
                          class="fa fa-tachometer-alt me-2"></i>
                      Order-Item
                  </a>
                  <a href="{{ route('categori.index') }}" class="nav-item nav-link bg-transparent"><i
                          class="fa fa-tachometer-alt me-2"></i>
                      Kategori
                  </a>
              @endauth
              @guest
                  <div class="ms-3">
                      <h6 class="mb-0">Guest</h6>

                  @endguest
                  <a href="{{ route('product.index') }}" class="nav-item nav-link bg-transparent"><i
                          class="fa fa-tachometer-alt me-2"></i>
                      Produk
                  </a>

                  @auth
                      <a href="{{ route('logout') }}" class="nav-item nav-link bg-danger"
                          onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i
                              class="fa fa-sign-out-alt me-2"></i>
                          Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  @endauth
                  @guest
                      <a href="{{ route('login') }}" class="nav-item nav-link bg-transparent"><i
                              class="fa fa-sign-in-alt me-2"></i>
                          Login
                      </a>
                      <a href="{{ route('register') }}" class="nav-item nav-link bg-transparent"><i
                              class="fa fa-registered me-2"></i>

                          Register
                      </a>
                  @endguest

              </div>
          </div>
      </nav>
  </div>
