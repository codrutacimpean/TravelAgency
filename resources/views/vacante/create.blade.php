@extends('layouts.app')

@section('template-class')

create-template

@endsection

@section('content')
<h1 class="text-center"></i> <i class="fas fa-plane"></i> Creeaza vacante <i class="fas fa-suitcase-rolling"></i> <i class=  "fas fa-umbrella-beach"></i> <i class="fas fa-sun"></i> <i class="fas fa-swimmer"></i></h1>
​<div class="row justify-content-center" style = "width: 800px; margin-left:360px">
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
        </div>
        <div class="card-body">
            <form action="{{ route('vacante.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="Destinatie" class="form-control" placeholder="Destinatie"/>
                </div>
                <div class="form-group">
                    <input type="text" name="Tara" class="form-control" placeholder="Tara" />
                </div>
                <div class="form-group">
                    <input type="text" name="Cazare" class="form-control" placeholder="Cazare" />
                </div>
                <div class="form-group">
                    <input type="text" name="Stele" class="form-control" placeholder="Stele" />
                </div>
                <div class="form-group">
                    <input type="text" name="Nr_Camere" class="form-control" placeholder="Numar de camere" />
                </div>
                <div class="form-group">
                    <input type="date" name="Data_Sosire" class="form-control" placeholder="Data sosire" />
                </div>
                <div class="form-group">
                    <input type="date" name="Data_Plecare" class="form-control" placeholder="Data plecare" />
                </div>
                <div class="form-group">
                    <input type="text" name="Nopti_Cazare" class="form-control" placeholder="Nopti de cazare" />
                </div>
                <div class="form-group">
                    <input type="text" name="Modalitate_Transport" class="form-control" placeholder="Modalitate de transport" />
                </div>
                <div class="form-group">
                    <input type="text" name="All_Inclusive" class="form-control" placeholder="All Inclusive" />
                </div>
                <div class="form-group">
                    <input type="text" name="Pret/Pers/Euro" class="form-control" placeholder="Pret/Pers/Euro" />
                </div>
                <div class="form-group text-center">
                    <button class="btn">Creeaza vacanta</button>
                </div>
            </form>                          
        </div>
    </div>
</div>
​
@endsection