@extends('layouts.app')

@section('content')
<main class="container posts articles">

  <?php foreach ($vignettes as $key => $value): ?>
    <article>
        <img src="{{ $value["url"] }}" alt="{{ $value["legende"] }}">
        <p><a href="">{{ $value["legende"] }}</a></p>
        <p><a href="/show/{{ $value["id"] }}">Voir</a></p>
        <p><a href="">Editer</a></p>
        <p><a href="">Supprimer</a></p>
    </article>
  <?php endforeach; ?>

</main>
@endsection
