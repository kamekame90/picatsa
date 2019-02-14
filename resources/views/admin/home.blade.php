@extends('layouts.app')

@section('content')
<main class="container posts articles">

    <article>
        <p>Bonjour {{ $user->name }}</p>
    </article>

</main>
@endsection
