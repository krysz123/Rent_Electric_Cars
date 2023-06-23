@extends('layouts.app')
@section('content')
    <div class="container">
        <br>
        <br>
        @auth
            <form action="{{ route('cars.create') }}">
                <input type="submit" class="btn btn-primary" name="" value="Add new car">
            </form>
        @endauth
        <br>
        @foreach ($cars as $car)
            <div class="card mb-3" {{ $car->id }}>
                <div class="row g-0">
                    <div class="col-md-4">
                        @if (!is_null($car->image_path))
                            <img src="{{ asset('storage/' . $car->image_path) }}" class="img-fluid rounded-start">
                        @else
                            <div class="container">
                                <img src="{{ asset('images/logo.png') }}" width="50%"
                                    class="d-inline-block align-text-top m-2">
                            </div>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-light">
                            <p class="font-semibold text-xl text-gray-800 leading-tight">
                                @foreach ($brands as $brand)
                                    @if ($car->brand_id == $brand->id)
                                        {{ $brand->name }} {{ $car->model }}
                                    @endif
                                @endforeach
                            </p>
                            <br>
                            <p class="card-text">Price per day: {{ $car->price }} PLN</p>
                            <p class="card-text">Range: {{ $car->range }} km</p>
                            <br>
                            @auth
                                <div class="d-flex p-2">
                                    <a href="{{ route('cars.edit', $car->id) }}"> <input type="submit" class="btn btn-info m-1"
                                            name="" value="Edit"></a>
                                    <br>
                                    <form method="post" action="{{ route('cars.destroy', ['cars' => $car]) }}">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger m-1" name="" value="Delete">
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="container">
        {{ $cars->links() }}
    </div>
@endsection
