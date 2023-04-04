@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="bg-white wa m-4">
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Yangi  product yaratish</h4>
                            </div>
                            <div class="card-body">
                                <form class="form  add_us" action="{{route('products.store')}}" method="POST"  enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-9">

                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="first-name-column">Title</label>
                                                        <input type="text" id="first-name-column"  value="{{old('title')}}"  class="@error('title') border border-danger  @enderror form-control" placeholder=" Title"
                                                               name="title" />
                                                        @error('title')
                                                        <div class="text-danger p-1">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="last-name-column">Quantity</label>
                                                        <input type="text" id="last-name-column"  value="{{old('quantity')}}"  class="@error('quantity') border border-danger  @enderror form-control" placeholder=" Quantity"
                                                               name="quantity" />
                                                        @error('quantity')
                                                        <div class="text-danger p-1">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="tel">Price</label>
                                                        <input type="tel" id="tel"  value="{{old('price')}}" class="@error('price') border border-danger  @enderror form-control telefon" name="price" placeholder="Price" />
                                                        @error('price')
                                                        <div class="text-danger p-1">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>

                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <button type="submit" data-id=".add_us" data-title="User was add successfuly" class="add_ btn btn-primary me-1">Add</button>
                                                    <button type="reset" class="btn btn-outline-secondary">O'chirish</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
@endsection

