@extends('app')
@section('content')
    <div class="container">

        <h1>Produtos</h1>

        <br>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary pull-right" >New Product</a>
        <br>
        <br>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Recommend</th>
                <th>Featured</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ str_limit($product->description, $limit = 100, $end = '...') }}
                <td>{{ $product->category->name }}</td>
                <td>R$: {{ $product->price }}</td>
                <td>{{ $product->recommend ? "Yes": "No" }}</td>
                <td>{{ $product->featured ? "Yes": "No" }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', ['id' => $product->id ]) }}" >Edit</a> |
                    <a href="{{ route('product.images', ['id' => $product->id ]) }}" >Images</a> |
                    <a href="{{ route('products.delete', ['id' => $product->id ]) }}" onclick="if(!confirm('Tem certeza que quer deletar?')){return false;};" >Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $products->render() !!}

    </div>
@endsection
