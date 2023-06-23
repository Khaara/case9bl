@extends('layouts.app')

@section('template_title')
    Purchase
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Compra') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('purchases.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>Creado Exitosamente</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>

										<th>Cantidad</th>
										<th>Id de Almacen</th>
										<th>Id de Producto</th>
										<th>Id de Manager</th>
										<th>Id de Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $purchase->ammount }}</td>
											<td>{{ $purchase->storages_id }}</td>
											<td>{{ $purchase->item_id }}</td>
											<td>{{ $purchase->manager_id }}</td>
											<td>{{ $purchase->clients_id }}</td>

                                            <td>
                                                <form action="{{ route('purchases.destroy',$purchase->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('purchases.show',$purchase->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('purchases.edit',$purchase->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $purchases->links() !!}
            </div>
        </div>
    </div>
@endsection
