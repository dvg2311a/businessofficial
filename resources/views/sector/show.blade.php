@extends('layouts.app')

@section('template_title')
    {{ $sector->name ?? "{{ __('Show') Sector" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Sector</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sectors/index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $sector->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $sector->description }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $sector->category }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
