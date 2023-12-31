@extends('layouts.app')

@section('template_title')
    Activity
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Actividades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('activities.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Fecha</th>
										<th>Id Test</th>
										<th>Id Archivos</th>
										<th>Id Calendario</th>
										<th>Id Ejercicios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($activities as $activity)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $activity->dates }}</td>
											<td>{{ $activity->id_tests }}</td>
											<td>{{ $activity->id_medias }}</td>
											<td>{{ $activity->id_calendars }}</td>
											<td>{{ $activity->id_excercises }}</td>

                                            <td>
                                                <form action="{{ route('activities.destroy',$activity->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('activities.show',$activity->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('activities.edit',$activity->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $activities->links() !!}
            </div>
        </div>
    </div>
@endsection
