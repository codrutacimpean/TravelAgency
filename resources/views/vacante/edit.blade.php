@extends('layouts.app')
@section('template-class')

edit-template

@endsection
@section('content')

<h1 class="text-center">Actualizati vacante</h1>
<div class="row justify-content-center" style = "width: 800px; margin-left:360px">
    <div class="col-md-8">
        <div class="card card-default">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class = "edit">
                <div class="card-body">
                    <form action="{{ route(('vacante.update'), $vacanta['id']) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); "type="text" name="Destinatie" class="form-control" placeholder="Destinatie" value="{{$vacanta['Destinatie']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); " type="text" name="Tara" class="form-control" placeholder="Tara" value="{{$vacanta['Tara']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); " type="text" name="Cazare" class="form-control" placeholder="Cazare" value="{{$vacanta['Cazare']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); "type="text" name="Stele" class="form-control" placeholder="Stele" value="{{$vacanta['Stele']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); " type="text" name="Nr_Camere" class="form-control" placeholder="Numar Camere" value="{{$vacanta['Nr_Camere']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); " type="date" name="Data_Sosire" class="form-control" placeholder="Data Sosire" value="{{$vacanta['Data_Sosire']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); "type="date" name="Data_Plecare" class="form-control" placeholder="Data plecare" value="{{$vacanta['Data_Plecare']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); " type="text" name="Nopti_Cazare" class="form-control" placeholder="Nopti Cazare" value="{{$vacanta['Nopti_Cazare']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); " type="text" name="Modalitate_Transport" class="form-control" placeholder="Modalitate Transport" value="{{$vacanta['Modalitate_Transport']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); "type="text" name="All_Inclusive" class="form-control" placeholder="All Inclusive" value="{{$vacanta['All_Inclusive']}}">
                        </div>
                        <div class="form-group">
                            <input style = "background: rgba(250, 247, 247, 0.2); " type="text" name="Pret/Pers/Euro" class="form-control" placeholder="Pret/Pers/Euro" value="{{$vacanta['Pret/Pers/Euro']}}">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success"><i class="fas fa-arrow-up"></i></i>Actualizati</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection