@extends('layouts.app')

@section('template_title')
    Suscription
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Suscripción') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('suscriptions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Precio</th>
										<th>Tipo</th>
										<th>Id Pago</th>
										<th>Id Actividades</th>
										<th>Id Usuario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suscriptions as $suscription)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $suscription->dates }}</td>
											<td>{{ $suscription->price }}</td>
											<td>{{ $suscription->type }}</td>
											<td>{{ $suscription->id_pays }}</td>
											<td>{{ $suscription->id_activities }}</td>
											<td>{{ $suscription->id_users }}</td>

                                            <td>
                                                <form action="{{ route('suscriptions.destroy',$suscription->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('suscriptions.show',$suscription->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('suscriptions.edit',$suscription->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $suscriptions->links() !!}
            </div>
        </div>
    </div>
@endsection
