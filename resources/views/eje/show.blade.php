@extends('layouts.app')

@section('template_title')
    {{ $eje->name ?? 'Show Eje' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Motrar Eje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ejes.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Manual Id:</strong>
                            {{ $eje->manual_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $eje->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $eje->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
