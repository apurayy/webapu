@include('navbar');

<h1>{{ $pagetitle }}</h1>
<h4>This is my laravel project</h4>

<h3>Service</h3>

<ul>
    @foreach ($services as $service)
        <li>{{ $service }}</li>
    @endforeach

</ul>
