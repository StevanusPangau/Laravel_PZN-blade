@isset($tittle)
<h1>{{ $tittle }}</h1>
@else
<h1>Belajar Laravel Blade Template</h1>
@endisset

@isset($description)
<p>{{ $description }}</p>
@endisset