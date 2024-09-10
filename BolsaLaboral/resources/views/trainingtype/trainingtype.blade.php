@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Tipo de Capacitación</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Tipo de Capacitación</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_type"><i class="fa fa-plus"></i> Añadir Tipo</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">#</th>
                                    <th>Tipo </th>
                                    <th>Descripción </th>
                                    <th>Estado </th>
                                    <th class="text-right">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($show as $key => $items)

                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td class="type">{{ $items->type }}</td>
                                    <td hidden class="e_id">{{ $items->id }}</td>
                                    <td class="description">{{ $items->description }}</td>
                                    <td hidden class="status">{{ $items->status }}</td>
                                    @if($items->status =='Active')
                                    <td>
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i>{{ $items->status }}
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Activo</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactivo</a>
                                            </div>
                                        </div>
                                    </td>
                                    @endif
                                    @if($items->status =='Inactive')
                                    <td>
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i>{{ $items->status }}
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Activo</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactivo</a>
                                            </div>
                                        </div>
                                    </td>
                                    @endif
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item edit_type " href="#" data-toggle="modal" data-target="#edit_type"><i class="fa fa-pencil m-r-5"></i> Editar</a>
                                                <a class="dropdown-item delete_type" href="#" data-toggle="modal" data-target="#delete_type"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Add Training Type Modal -->
            <div id="add_type" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Añadir Nuevo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('form/training/type/save') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Tipo <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="type" name="type">
                                </div>
                                <div class="form-group">
                                    <label>Descripción <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="2" id="description" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Estado</label>
                                    <select class="select" id="status" name="status">
                                        <option value="Active">Activo</option>
                                        <option value="Inactive">Inactivo</option>
                                    </select>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add Training Type Modal -->

            <!-- Edit Training Type Modal -->
            <div id="edit_type" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Editar Tipo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('form//training/type/update') }}" method="POST">
                                @csrf
                                <input type="hidden" class="form-control" id="e_id" name="id" value="">
                                <div class="form-group">
                                    <label>Tipo <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="e_type" name="type" value="">
                                </div>
                                <div class="form-group">
                                    <label>Descripción <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="2" id="e_description" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Estado</label>
                                    <select class="select" id="e_status" name="status">
                                        <option value="Active">Activo</option>
                                        <option value="Inactive">Inactivo</option>
                                    </select>
                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Edit Training Type Modal -->

            <!-- Delete Training Type Modal -->
            <div class="modal custom-modal fade" id="delete_type" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Eliminar Tipo de Capacitación</h3>
                                <p>¿Está seguro de que desea eliminar?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <form action="{{ route('form//training/type/delete') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" class="e_id" value="">
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary continue-btn submit-btn">Eliminar</button>
                                        </div>
                                        <div class="col-6">
                                            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancelar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Training Type Modal -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
    @section('script')
        {{-- update --}}
        <script>
            $(document).on('click','.edit_type',function()
            {
                var _this = $(this).parents('tr');
                $('#e_id').val(_this.find('.e_id').text());
                $('#e_type').val(_this.find('.type').text());
                $('#e_description').val(_this.find('.description').text());
                $('#e_status').val(_this.find('.status').text());
            });
            $(document).on('click','.delete_type',function()
            {
                var _this = $(this).parents('tr');
                $('.e_id').val(_this.find('.e_id').text());
            });
        </script>
    @endsection
@endsection
