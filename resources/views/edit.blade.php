@extends('layouts.app')

@section('content')
<main class="container auth">
    <div class="message error">
    </div>
    <form method="POST" action="">
       
        <input type="text" name="legende"/>
        <textarea name="description"></textarea>
        <input type="submit" value="Modifier">
    </form>
</main>

@endsection

