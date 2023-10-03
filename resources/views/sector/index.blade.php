@extends('layouts.app')

@section('template_title')
    Sector
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('sector/create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir sector') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
										<th>Nombre</th>

										<th>Descripción</th>

										<th>Categoría</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sectors as $sector)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $sector->name }}</td>
											<td>{{ $sector->description }}</td>
											<td>{{ $sector->category }}</td>

                                            <td>
                                                <a class="btn btn-sm btn-primary " href="{{ route('sector/show', $sector->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('sector/edit', $sector->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                <form action="{{ route('sector/destroy',$sector->id) }}" method="POST">

                                                    @csrf

                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $sectors->links() !!}
            </div>
        </div>

    </div>
@endsection


