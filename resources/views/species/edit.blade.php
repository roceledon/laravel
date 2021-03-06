@extends('layouts.principal')
    @section('content')
        @include('alerts.request')
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Editar Especie {{$species->species}}</h2>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        {!!Form::model($species,['route'=>['species.update',$species->id], 'method'=>'PUT'])!!}
            @include('species.forms.species')
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-refresh"></i> Actualizar
            </button>
            <a href="{{ route('species.index') }}" class="btn btn-info">
                <i class="fa fa-arrow-circle-left">  Volver</i>
            </a>
        {!!Form::close()!!}
    @endsection