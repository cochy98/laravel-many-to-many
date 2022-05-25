<header class="container-fluid">
  <nav class="d-flex justify-content-between align-items-center">
    <a href="{{ url('/') }}" class="brand">Cochy Press</a>
    <ul class="d-flex">
      {{-- <li>Nome utente</li>
      <li>logout</li> --}}

      @if (Route::has('login'))
        {{-- § Caso 1: l'utente è autenticato, mostro Nome utente e logout --}}
        @auth
          <li><a href="{{ Route('admin.home') }}">{{ ucfirst(Auth::user()->name) }}</a></li>
          <li><a href="{{ Route('admin.posts.index') }}">Posts</a></li>
          <li><a href="{{ Route('admin.posts.create') }}">Scrivi nuovo post</a></li>
          <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
            </a>
            {{-- ! Serve un form perchè la chiamata al logout deve essere di tipo POST --}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>

        {{-- § Caso 2: l'utente che apre questa pagina è un ospite --}}
        @else
          <li>
            <a href="{{ route('login') }}">Accedi</a>
          </li>
          @if (Route::has('register'))
            <li>
              <a href="{{ route('register') }}">Registrati</a>
            </li>
          @endif
        @endauth
      @endif
    </ul>
  </nav>
</header>
