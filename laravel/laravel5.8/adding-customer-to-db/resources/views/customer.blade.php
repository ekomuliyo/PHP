@extends('layout')

@section('content')

    <form action="customers" method="POST">
        <input type="text" name="name">
        
        <button type="submit">Add</button>
        @csrf
    </form>

    <ul>
        @foreach ($customers as $customer)
            <li>{{ $customer->name }}</li>
        @endforeach
    </ul>
@endsection