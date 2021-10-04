@extends('layouts.app')
@section('template-class')

index-template

@endsection
@section('content')
    <h1 class="text-center ">Pagina cu vacante</h1>
    <div class="row justify-content-center my-5">
        <div class="col-md-8" style = "margin-top: auto">
            <div class="card card-default">
                <div class="card card-header">Gaseste-ti vacanta favorita!</div>
                    <div class="card-body">
                        <form action="">
                            <div class="inputGroup">
                                <input type="text" name="search" class="form-control mr-2" placeholder="Cauta"/>
                                <button class="btn btn-primary btn-sm" type="submit">Cauta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                     @endif
                    <ol class="list-group">
                    @foreach ($vacante as $vacanta)
                        <li style = "background: rgba(250, 247, 247, 0.2);"  class="list-group-item"><i class=  "fas fa-umbrella-beach"></i>
                            {{ $vacanta['Destinatie']}}
                            <a href="{{ route('vacante.show', $vacanta['id']) }}" class="btn btn-primary btn-sm float-right mr-2">Afișează</a>
                        </li>
                    @endforeach
                    </ol>
                    <div class="row justify-content-center">
                        <div>
                            <div style = "font-size:15px; margin-left:15px;">{{ $vacante->appends(request()->query())->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
