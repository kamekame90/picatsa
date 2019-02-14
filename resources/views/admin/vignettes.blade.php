@extends('layouts.app')

@section('content')
<main class="container posts articles">

  <form action= "{{ route('vignettes.create') }}" method="get">
    <button class="btn btn-primary" type="submit">Create Vignette</button>
  </form>
  @if (session('stored'))
    {{ session('stored') }}
  @endif
  <?php foreach ($vignettes as $key => $value): ?>
    <article>
        <img src="{{ $value["url"] }}" alt="{{ $value["legende"] }}">
        <p><a href="">{{ $value["legende"] }}</a></p>
        <form action = "{{ route('vignettes.show',['vignette' => $value['id']]) }}" method="get">
          <button class="btn btn-primary" type="submit">Voir</button>
        </form>
        <p> </p>
        <form action = "{{ route('vignettes.edit',['vignette' => $value['id']]) }}" method="get">
          <button class="btn btn-primary" type="submit">Editer</button>
        </form>
        <p> </p>
        <form action= "{{ route('vignettes.destroy',['vignette' => $value['id']]) }}" method="post">
          @csrf
          @method("DELETE")
          <button class="btn btn-primary" type="submit">Delete</button>
        </form>

    </article>
  <?php endforeach; ?>

</main>
@endsection
