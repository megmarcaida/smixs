<header>
	<nav class="navbar navbar-fixed-top navbar-latte">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('dashboard') }}">#SMIXS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if (count(Auth::user())>0)
      <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="search" class="form-control" placeholder="Search">
          </div>
          <noscript><button type="submit" class="btn btn-default">Submit</button></noscript>
        </form>
      @endif
      <ul class="nav navbar-nav navbar-right">
        @if (count(Auth::user())>0)
        @if (Storage::disk('local')->has(Auth::user()->id . '.jpg'))
        <li><a href="{{ route('account') }}"><img src="{{ route('account.image', ['filename' => Auth::user()->id . '.jpg']) }}" alt="" class="img-responsive profile-pic"> {{ Auth::user()->firstname }}</a></li>
        @else
        <li><a href="{{ route('account') }}"><img src="{{ asset('src/img/blank.png') }}" alt="" class="img-responsive profile-pic"> {{ Auth::user()->firstname }}</a></li>
        @endif
        <li><a href="{{ route('general-settings') }}" title="Settings"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></li>
        <li><a href="{{ route('logout') }}" title="Logout?"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>