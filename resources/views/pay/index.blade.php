@extends('layouts.app')

@section('template_title')
    Pay
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pago') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pays.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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

										<th>Cantidad de pago</th>
										<th>Número de tarjeta de crédito o débito</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pays as $pay)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $pay->payment }}</td>
											<td>{{ $pay->creditt_card_number }}</td>
											<td>{{ $pay->dates }}</td>

                                            <td>
                                                <form action="{{ route('pays.destroy',$pay->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pays.show',$pay->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pays.edit',$pay->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $pays->links() !!}
            </div>
        </div>
    </div>
@endsection