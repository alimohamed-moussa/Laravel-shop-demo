@extends('app')

@section('content')

      <div class="col-lg-12">

        <h1 class="my-4">Products</h1>
        <a class="btn btn-info mb-4" href="{{ route('products.create') }}"> New Product</a>
        <table class="table table-">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                @foreach ( $products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </thead>
        </table>
        

      </div>
      <!-- /.col-lg-9 -->

@endsection
