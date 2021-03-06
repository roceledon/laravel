@extends('layouts.principal')
@section('content')
@include('alerts.message')
    <div class="row">
        <div class="col-sm-9">
            <h2 class="page-header">Especies</h2>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-sm-3 page-header">
            <!-- Buscador -->
            {!! Form::open (['route' => 'species.index', 'method' => 'GET', 'class' => 'navbar-form-pull-right'])!!}
            <div class="input-group">
                {!! Form::text('species', null, ['class' => 'form-control', 'placeholder'=>'Buscar especie', 'aria-describedby'=>'search']) !!}
                        <span class="input-group-addon" id="search">
                            <span class="glyphicon glyphicon-search" aria-hidden="true">
                            </span>
                        </span>
            </div>
            {!! Form::close() !!}
            <!-- Fin buscador -->
        </div>
    </div>
    <div>
        <a href="{{ route('species.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Agregar especie</a>
        <a href="{{ route('home.index') }}" class="btn btn-info" title="Volver"><i class="fa fa-arrow-circle-left"></i> Volver</span></a>
    </div>
    <div id="tableSpecies" class="table-responsive">
        <table class="table">
            <thead>
                <th>Mascota</th>
                <th colspan="2">Acciones</th>
            </thead>

            @foreach($speciesList as $species)
            <tbody>
                <td>{{$species->species}}</td>
                <td>
                    {!!link_to_route('species.edit', $title = ' Editar', $parameters = [ $species->id], $attributes = ['class'=>'btn btn-primary icon-edit'])!!}
                </td>
                <td>
                    <a href="{{ route('species.destroy', $species->id) }}" class="btn btn-danger">
                        <i class="fa fa-user-times"></i> Eliminar
                    </a>
                </td>
            </tbody>
            @endforeach
        </table>
        <div>{!! $speciesList->render() !!}</div>
    </div>
@endsection