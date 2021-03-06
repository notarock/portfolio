
@extends('layouts.master')

@section('content')

    @if(Auth::check())
        @if(Auth::user()->admin)
            <div class="col-md-8 col-md-offset-2 centered">
                <div class="row">
                    <a href='/categories/create' class="col-md-4 col-md-offset-4     btn btn-success">
                        <span style="color:black;">Ajouter une catégorie</span>
                    </a>
                </div>
                <hr/>
            </div>
        @endif
    @endif
    <div class="row" >
        <div class="col-md-8 col-md-offset-2 centered">
            <span class="glyphicon glyphicon-tag"></span>
            <h1>CATÉGORIES</h1>
        </div>
        <div class="col-md-8 col-md-offset-2 centered">{{ $lstCategories->links() }}</div>
        @include("categories.listes", ['lstCategories' => $lstCategories ])
        <div class="col-md-8 col-md-offset-2 centered">{{ $lstCategories->links() }}</div>
    </div>
@endsection
