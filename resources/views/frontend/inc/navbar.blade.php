<nav class="navbar navbar-expand-lg navbar-light bg-transparent pt-3 pb-3">
    <div class="container">
        <a href="/" ><img class="navbar-brand" width="180" src="{{ URL::to('images/logo1.png') }}" /></a>
        <button style="background-color: #007bff;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span  class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home</a>
            </li>

            <li class="nav-item {{ request()->is('track') || request()->is('confirm') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('hometrack') }}">Track my parcel</a>
            </li>
            <li class="nav-item {{ request()->is('company')  ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('homecompany') }}" >Company</a>
            </li>
            <li class="nav-item {{ request()->is('faq') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('homefaq') }}">FAQ</a>
            </li>
            <li class="nav-item {{ request()->is('contact-us') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('homeContactUs') }}">Contact Us</a>
            </li>
            @guest
            @if (Route::has('register'))
            <li class="nav-item {{ request()->is('register') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('register') }}">Sign up</a>
            </li>
            @endif
            <a class="nav-link border bg-primary border-0 pl-4 pr-4" id="login" href="{{ route('login')}}">Login</a>
            @else


            <li class="nav-item dropdown">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link border bg-primary border-0 pl-4 pr-4 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     Hi! {{ Auth::user()->first_name }} <span class="caret"></span>
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item nav-item" href="{{ route('homeDetails') }}">Details</a>
                   <a class="dropdown-item nav-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>

</li>
@endguest

</ul>
</div>
</div>
</nav>