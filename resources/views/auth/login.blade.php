@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="bg-white w mt-4 rounded">


            <form action="/login" method="post">


                @csrf


                <div class="form-group m-4">
                    <label class="sr-only" for="exampleInputEmail1">Name </label>
                    <input type="text" name="name" class="form-control p-3  @error('name') border border-danger  @enderror"
                           id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" value="{{old('name')}}">
                    @error('name')
                    <div class="text-danger p-1">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group m-4">
                    <label class="sr-only" for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control p-3  @error('password') border border-danger  @enderror"
                           id="exampleInputPassword1" placeholder="Password" value="">
                    @error('password')
                    <div class="text-danger p-1">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-check m-4">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember me </label>
                </div>

                <div class="m-4">
                    <button type="submit" class="btn btn-primary w-100 ">Submit</button>
                </div>

            </form>
        </div>
    </div>
@endsection

