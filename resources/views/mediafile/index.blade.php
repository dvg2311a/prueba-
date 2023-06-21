@extends('layouts.app')

@section('template_title')
    Mediafile
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Archivos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mediafiles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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

										<th>Archivo</th>
										<th>Nombre</th>
										<th>Género</th>
										<th>Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mediafiles as $mediafile)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $mediafile->archive }}</td>
											<td>{{ $mediafile->name }}</td>
											<td>{{ $mediafile->genre }}</td>
											<td>{{ $mediafile->type }}</td>

                                            <td>
                                                <form action="{{ route('mediafiles.destroy',$mediafile->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mediafiles.show',$mediafile->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mediafiles.edit',$mediafile->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $mediafiles->links() !!}
            </div>
        </div>
    </div>
@endsection
