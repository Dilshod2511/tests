@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="bg-white wa m-4">
            @can('create', App\Models\Product::class)
            <div class="content-header">
                <div class="d-flex justify-content-between align-items-center mb-2 mt-5">
                    <a href="{{route('products.create')}}" class="btn btn-primary">Product qo‘shish</a>
                </div>

            </div>
          @endcan
            <!-- List DataTable -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                <tr>
                                    <th class="cell-fit">№</th>
                                    <th>Title</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)

                                    <tr>
                                        <td>{{($products->currentpage()-1)*$products->perpage()+($loop->index+1)}}</td>
                                        <td>
                                            <div class="d-flex justify-content-left align-items-center">

                                                <div class="d-flex flex-column">
                                                    <a href="{{route('products.show',$product->id)}}" class="user_name text-truncate text-body">
                                                        <span class="fw-bolder">{{$product->title}} </span>
                                                    </a>

                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->total_price}}</td>
                                        @canany(['update', 'delete'], $product)
                                        <td class="cell-fit">

                                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-flat-secondary waves-effect btn-icon">edit</a>
                                            <form action="{{route('products.destroy',$product->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-flat-danger waves-effect btn-icon" onclick="return confirm('Are you sure to disable!')"  data-bs-toggle="modal" data-bs-target="#deleteXodim">delete</button>
                                            </form>

                                        </td>
                                        @endcanany
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div>

                                    </div>
                                    <nav aria-label="Page navigation">
                                        {!! $products->links()!!}

                                    </nav>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--/ List DataTable -->








        </div>

    </div>
@endsection

