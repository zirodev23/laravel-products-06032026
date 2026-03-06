<h1>All products</h1>
<ul>
    @foreach ($allProducts as $product)
        <li>{{ $product->name }}</li>
    @endforeach
</ul>
