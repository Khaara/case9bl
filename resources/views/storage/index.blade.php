@extends('layouts.app')

@section('template_title')
    Storage
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Almacen de Productos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('storages.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>Realizado Exitosamente</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
                                        
										<th>Cantidad</th>
										<th>Id de Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($storages as $storage)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $storage->ammount }}</td>
											<td>{{ $storage->item_id }}</td>

                                            <td>
                                                <form action="{{ route('storages.destroy',$storage->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('storages.show',$storage->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('storages.edit',$storage->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $storages->links() !!}
            </div>
        </div>
    </div>
@endsection
