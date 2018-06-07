<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="@yield('active_index')"><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
        <li class="@yield('active_blog')"><a href="{{ url('blog') }}">Blogs</a></li>
        <li class="@yield('active_about')"><a href="{{ url('about') }}">About</a></li>
        <li class="@yield('active_contact')"><a href="{{ url('contact') }}">Contact</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@guest My Account @else {{Auth::user()->name}} @endguest<span class="caret"></span></a>
          <ul class="dropdown-menu">
            @guest <li><a class="" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a class="" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li role="separator" class="divider"></li>
             <li><a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
            @endguest
            
            
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>