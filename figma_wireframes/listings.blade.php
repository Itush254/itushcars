@extends('layout')

@section('content')
<h2 class="hero-description">Itush Cars
</h2>
<h2 class="hero-description">We Bring Joy To Your Journey
</h2>
<h2>
<h1>{{$heading}}</h1>

@if (count($listings) == 0)
<p>No Listig Found</p>  
@endif

@foreach($listings as $listing)
<h2>
  <a href="/listings/{{$listing['id']}}">{{$listing['title']}}
  </a>
</h2>
<p>
  {{$listing['description']}}
</p>
@endforeach

@endsection