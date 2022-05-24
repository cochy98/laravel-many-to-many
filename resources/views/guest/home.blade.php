@extends('layouts.app')

@section('content')
  <div class="guest-home container-fluid p-5">
    <div class="message">
      <h1>
        Benvenuto su Cochy Press! Registrati per scoprire giorno dopo giorno nuovi post. Cosa aspetti? Clicca sul pulsante in basso
      </h1>
      <a href="{{ route('register') }}" class="btn btn-primary">Registrati</a>
    </div>



    
  </div>
@endsection
