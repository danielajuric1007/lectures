@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h4 class="text-center">{{ session('mssg') }}</h4>
        </div>

        <div class="row d-flex justify-content-between mx-0" style="color:white">
            <h1>Lekcije</h1>

            @if (Auth::check())
                <div>
                    <a href="/lectures/create" class="btn btn-info text-white">Dodaj lekciju</a>
                </div>
            @endif
        </div>

        <form method="GET">
            <div class="form-group">
                <select class="form-control" name="topic" id="topic">
                    <option selected disabled>Odaberi temu</option>
                    <option>Programiranje</option>
                    <option>Matematika</option>
                    <option>Fizika</option>
                    <option>Biologija</option>
                    <option>Geografija</option>
                    <option>Hrvatski jezik</option>
                    <option>Engleski jezik</option>
                    <option>Ostalo</option>
                </select>
                <div class="m-2 text-center">
                    <a class="btn btn-secondary text-white m-2" href="/lectures">Sve teme</a>
                    <input class="btn btn-info text-white m-2" type="submit" value="Traži">
                </div>
            </div>
        </form>

        <div class="row">
            @foreach ($lectures as $lecture)
                <div class="col-lg-4 mb-4 d-flex justify-content-center">
                    <div class="card-lecture" style="width: 18rem;">
                        @if($lecture->topic == 'Programiranje')
                        <div>
                        <img src="img/programiranje.jpg" class="card-img-top" alt="...">
                        </div>
                        @elseif($lecture->topic == 'Matematika')
                        <div>
                        <img src="img/math.jpg" class="card-img-top" alt="...">
                        </div>
                        @elseif($lecture->topic == 'Fizika')
                        <div>
                        <img src="img/fizika.png" class="card-img-top" alt="...">
                        </div>
                        @elseif($lecture->topic == 'Biologija')
                        <div>
                        <img src="img/biologija.jpg" class="card-img-top" alt="...">
                        </div>
                        @elseif($lecture->topic == 'Geografija')
                        <div>
                        <img src="img/geografija.jpg" class="card-img-top" alt="...">
                        </div>
                        @elseif($lecture->topic == 'Hrvatski jezik')
                        <div>
                        <img src="img/hrvatski.png" class="card-img-top" alt="...">
                        </div>
                        @elseif($lecture->topic == 'Engleski jezik')
                        <div>
                        <img src="img/engleski.png" class="card-img-top" alt="...">
                        </div>
                        @elseif($lecture->topic == 'Ostalo')
                        <div>
                        <img src="img/ostalo.png" class="card-img-top" alt="...">
                        </div>
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title" >Naziv: {{ $lecture->name }}</h5>
                            <h6 class="card-subtitle mb-2">Tema: {{ $lecture->topic }}</h6>
                            <h6 class="card-subtitle mb-2">Napisao/la: {{ $lecture->user->email }}</h6>
                            <div class="text-right">
                                <a href="/lectures/{{ $lecture->id }}" class="card-link text-info" style="color:white;">Prikaži više</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        

    </div>
@endsection
