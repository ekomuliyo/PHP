<ul>
    @foreach($customers as $customer)
        <li>{{ $customer->name }}</li>
    @endforeach
</ul>