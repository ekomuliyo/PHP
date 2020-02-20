@extends('layout')

@section('content')
    
<h1>customers page</h1>

<ul>
    @foreach ($customers as $item)
    <li>{{ $item->name }}</li>    
    @endforeach
</ul>
@endsection