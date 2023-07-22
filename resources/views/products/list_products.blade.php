@section('content')
<body>
    <div class="main">
        <!-- Change_Log start -->
        @if($message = Session::get('success'))
            <div>
                <p class="alert alert-success">{{$message}}</p>
            </div>
        @endif
        <section style="margin: 0 28px" class="section-sm" id="Change_Log">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>
                        <a href="{{ route('products.create') }}">Create</a>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category ID</th>
                    <th>Material</th>
                    <th>Rate</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Updated at</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->cate_id }}</td>
                        <td>{{ $product->rate }}</td>
                        <td>{{ $product->material }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @method("delete")
                                @csrf
                                <button onclick="return confirm('XOA HA?')" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <!-- Change_Log end -->
    </div>
</body>
@endsection
@extends('layout.layout')
