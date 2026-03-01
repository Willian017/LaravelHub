@if(!Auth::check())
    <a href="{{ route('login.index') }}" class="hover:text-indigo-600">Login</a>
@else
    <a href="{{ route('logout') }}" class="hover:text-indigo-600">Logout</a>
@endif