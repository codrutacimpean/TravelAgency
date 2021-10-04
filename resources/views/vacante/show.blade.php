@extends('layouts.app')
@section('template-class')

    show-template
@endsection

@section('content')
    <h1 class="text-center">{{ $vacanta['Destinatie'] }}</h1>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style = "margin-top: 25px;" >
            <div class="card card-default" >
                <div class="card-header"><i class="fas fa-sun"></i> Detalii <i class="fas fa-sun"></i></div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div>
                    @endif
                <div class="card-body"><p style="text-align:center;">Tara: {{ $vacanta['Tara'] }}</p></div>
                <div class="card-body"><p style="text-align:center;">Cazare: {{ $vacanta['Cazare'] }}</p></div>
                <div class="card-body"><p style="text-align:center;">Stele: {{ $vacanta['Stele'] }}</p></div>
                <div class="card-body"><p style="text-align:center;">Numar camere: {{ $vacanta['Nr_Camere'] }}</p></div>
                <div class="card-body"><p style="text-align:center;">Data sosire:{{ $vacanta['Data_Sosire'] }}</p></div>
                <div class="card-body"><p style="text-align:center;">Data plecare: {{ $vacanta['Data_Plecare'] }}</p></div>
                <div class="card-body"><p style="text-align:center;">Nopti de cazare: {{ $vacanta['Nopti_Cazare'] }}</p></div>
                <div class="card-body"><p style="text-align:center;">Modalitate de transport: {{ $vacanta['Modalitate_Transport'] }}</p></div>
                <div class="card-body"><p style="text-align:center;">All Inclusive: {{ $vacanta['All_Inclusive'] }}</p></div>
                <div class="card-body"><p style="text-align:center;">Pret/Pers/Euro: {{ $vacanta['Pret/Pers/Euro'] }}</p></div>
            </div>
            <div class = "form-group text-center" >
                <a href="{{ route('vacante.edit', $vacanta['id']) }}" class="btn btn-info btn-sm my-2"><i class="fas fa-user-edit"></i>Editeaza</a>
                <form action="{{ route('vacante.destroy', $vacanta['id']) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class = "btn btn-info btn-sm my-2" type="submit"><i class="fas fa-trash-alt"></i>Sterge</button>
                </form>
            </div>
        </div>
        <div class = "col-md-3"></div>
    </div>
@endsection
