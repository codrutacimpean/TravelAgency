@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center" style = "width:860px">
        <div class="col-md-6" >
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img src = "../public/img/vacanteTree.jpg" width = "400px" height="700px">
                </div>
            </div>
        </div>
        <div class = "col-md-3"> 
            <h2 style = "padding:5px; color:#810c4d;
            text-shadow: 2px 2px 4px  #f3eff1; font-style:italic; width:800px; font-size:50px;">{{ __('Bun venit in contul tau!') }}<h2>
            <h4 style = " color:#810c4d;
            text-shadow: 2px 2px 4px  #f3eff1; font-style:italic; width:900px; padding:55px; text-align:center">{{ __('Îți place să călătorești?  Iti plac vacantele? Vino sa alegi sau sa-ți creezi propria vacanta la preturi minime sau afla cum poți sa ai vacantele de vis fără sa afecteze bugetul tău.') }}<h4>
        </div>
        <div class = "col-md-3"></div>
    </div>
</div>
@endsection
