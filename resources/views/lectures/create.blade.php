@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <h1>Dodaj lekciju</h1>
        </div>

        <div>
            <form method="POST" action="/lectures">
                @csrf
                <div class="form-group">
                    <label for="name">Naziv</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="topic">Tema</label>
                    <select class="form-control" id="topic" name="topic">
                        <option>Programiranje</option>
                        <option>Matematika</option>
                        <option>Fizika</option>
                        <option>Biologija</option>
                        <option>Geografija</option>
                        <option>Hrvatski jezik</option>
                        <option>Engleski jezik</option>
                        <option>Ostalo</option>
                    </select>
                </div>
                <section>
                    <div class="form-group">
                    <label for="description">Tekst</label>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST">
                                     @csrf
                                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                
                <div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                </div>
                <button type="submit" class="btn btn-primary">Dodaj</button>
                </section>
            </form>
        </div>

        <a href="/lectures">Back to all lectures</a>
    </div>


@endsection
