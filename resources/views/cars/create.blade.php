@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create a car
        </h2>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <br>
        <div class="container container-room">
            <form method="post" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Model Name</label>
                    <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name="model" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Brand</label>
                    <select class="form-select" aria-label="Default select example" name="brand_id" required>
                        <option>NULL</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Range</label>
                    <input type="number" class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name="range" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Price</label>
                    <input type="number" class="form-control" id="exampleFormControlTextarea1" rows="3"
                        name="price" required min="0">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image of car</label>
                    <input class="form-control" type="file" id="formFile" name="image" required>
                </div>

                <div class="container container-room">
                    <input type="submit" class="btn btn-primary" name="" value="Save" required min="0">
                </div>
            </form>
        </div>

    </div>
@endsection
