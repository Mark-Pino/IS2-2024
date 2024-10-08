@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Administración de Usuarios</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Usurios</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
<<<<<<< HEAD
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i> Agregar Usuario</a>
=======
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i> Add Userio</a>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                    </div>
                </div>
            </div>
			<!-- /Page Header -->

            <!-- Search Filter -->
            <form action="{{ route('search/user/list') }}" method="POST">
                @csrf
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" id="name" name="name">
                            <label class="focus-label">Nombre de Usuario</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" id="name" name="role_name">
                            <label class="focus-label">Nombre del Role</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" id="name" name="status">
                            <label class="focus-label">Estado</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
<<<<<<< HEAD
                        <button type="sumit" class="btn btn-success btn-block"> Buscar </button>
=======
                        <button type="sumit" class="btn btn-success btn-block"> Search </button>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                    </div>
                </div>
            </form>
            <!-- /Search Filter -->
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>User ID</th>
                                    <th hidden></th>
                                    <th>Correo</th>
                                    <th>Puesto</th>
                                    <th>Cel</th>
                                    <th>Fecha de ingreso</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Departamento</th>
                                    <th class="text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $key=>$user )
                                <tr>
                                    <td>
                                        <span hidden class="image">{{ $user->avatar}}</span>
                                        <h2 class="table-avatar">
                                            <a href="{{ url('employee/profile/'.$user->user_id) }}" class="avatar"><img src="{{ URL::to('/assets/images/'. $user->avatar) }}" alt="{{ $user->avatar }}"></a>
                                            <a href="{{ url('employee/profile/'.$user->user_id) }}" class="name">{{ $user->name }}</span></a>
                                        </h2>
                                    </td>
                                    <td hidden class="ids">{{ $user->id }}</td>
                                    <td class="id">{{ $user->user_id }}</td>
                                    <td class="email">{{ $user->email }}</td>
                                    <td class="position">{{ $user->position }}</td>
                                    <td class="phone_number">{{ $user->phone_number }}</td>
                                    <td>{{ $user->join_date }}</td>
                                    <td>
                                        @if ($user->role_name=='Admin')
                                            <span class="badge bg-inverse-danger role_name">{{ $user->role_name }}</span>
                                            @elseif ($user->role_name=='Super Admin')
                                            <span class="badge bg-inverse-warning role_name">{{ $user->role_name }}</span>
                                            @elseif ($user->role_name=='Normal User')
                                            <span class="badge bg-inverse-info role_name">{{ $user->role_name }}</span>
                                            @elseif ($user->role_name=='Client')
                                            <span class="badge bg-inverse-success role_name">{{ $user->role_name }}</span>
                                            @elseif ($user->role_name=='Employee')
                                            <span class="badge bg-inverse-dark role_name">{{ $user->role_name }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown action-label">
                                            @if ($user->status=='Active')
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-success"></i>
                                                    <span class="statuss">{{ $user->status }}</span>
                                                </a>
                                                @elseif ($user->status=='Inactive')
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-info"></i>
                                                    <span class="statuss">{{ $user->status }}</span>
                                                </a>
                                                @elseif ($user->status=='Disable')
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-danger"></i>
                                                    <span class="statuss">{{ $user->status }}</span>
                                                </a>
                                                @elseif ($user->status=='')
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-dark"></i>
                                                    <span class="statuss">N/A</span>
                                                </a>
                                            @endif

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-dot-circle-o text-success"></i> Active
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-dot-circle-o text-warning"></i> Inactive
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i class="fa fa-dot-circle-o text-danger"></i> Disable
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="department">{{ $user->department }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item userUpdate" data-toggle="modal" data-id="'.$user->id.'" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item userDelete" href="#" data-toggle="modal" ata-id="'.$user->id.'" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
        </div>
        <!-- /Page Content -->


        <!-- Add User Modal -->
        <div id="add_user" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Agregar nuevo usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('user/add/save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" id="" name="name" value="{{ old('name') }}" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Correo</label>
=======
                                    <label>Emaill Address</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <input class="form-control" type="email" id="" name="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Rol</label>
=======
                                    <label>Role Name</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <select class="select" name="role_name" id="role_name">
                                        <option selected disabled> --Select --</option>
                                        @foreach ($role_name as $role )
                                        <option value="{{ $role->role_type }}">{{ $role->role_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Puesto</label>
=======
                                    <label>Position</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <select class="select" name="position" id="position">
                                        <option selected disabled> --Select --</option>
                                        @foreach ($position as $positions )
                                        <option value="{{ $positions->position }}">{{ $positions->position }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Cel</label>
                                        <input class="form-control" type="tel" id="" name="phone" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Departamento</label>
=======
                                    <label>Department</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <select class="select" name="department" id="department">
                                        <option selected disabled> --Select --</option>
                                        @foreach ($department as $departments )
                                        <option value="{{ $departments->department }}">{{ $departments->department }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Estado</label>
=======
                                    <label>Status</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <select class="select" name="status" id="status">
                                        <option selected disabled> --Select --</option>
                                        @foreach ($status_user as $status )
                                        <option value="{{ $status->type_name }}">{{ $status->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Foto de perfil</label>
=======
                                    <label>Photo</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Repita la Contraseña</label>
=======
                                    <label>Repeat Password</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Choose Repeat Password">
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add User Modal -->

        <!-- Edit User Modal -->
        <div id="edit_user" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <br>
                    <div class="modal-body">
                        <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" id="e_id" value="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>nombre</label>
                                        <input class="form-control" type="text" name="name" id="e_name" value="" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Correo</label>
=======
                                    <label>Email</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <input class="form-control" type="text" name="email" id="e_email" value=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Rol</label>
=======
                                    <label>Role Name</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <select class="select" name="role_name" id="e_role_name">
                                        @foreach ($role_name as $role )
                                        <option value="{{ $role->role_type }}">{{ $role->role_type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Puesto</label>
=======
                                    <label>Position</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <select class="select" name="position" id="e_position">
                                        @foreach ($position as $positions )
                                        <option value="{{ $positions->position }}">{{ $positions->position }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Cel</label>
                                        <input class="form-control" type="text" id="e_phone_number" name="phone" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Departamento</label>
=======
                                    <label>Department</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <select class="select" name="department" id="e_department">
                                        @foreach ($department as $departments )
                                        <option value="{{ $departments->department }}">{{ $departments->department }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Estado</label>
=======
                                    <label>Status</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <select class="select" name="status" id="e_status">
                                        @foreach ($status_user as $status )
                                        <option value="{{ $status->type_name }}">{{ $status->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6">
<<<<<<< HEAD
                                    <label>Foto</label>
=======
                                    <label>Photo</label>
>>>>>>> 5a6e97dd2db7bbde4e5426965570ddf4a4600e1c
                                    <input class="form-control" type="file" id="image" name="images">
                                    <input type="hidden" name="hidden_image" id="e_image" value="">
                                </div>
                            </div>
                            <br>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Salary Modal -->

        <!-- Delete User Modal -->
        <div class="modal custom-modal fade" id="delete_user" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Borrar Usurio</h3>
                            <p>¿Estás seguro de que quieres eliminar?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <form action="{{ route('user/delete') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" class="e_id" value="">
                                <input type="hidden" name="avatar" class="e_avatar" value="">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary continue-btn submit-btn">Borrar</button>
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
        <!-- /Delete User Modal -->
    </div>
    <!-- /Page Wrapper -->
    @section('script')
    {{-- update js --}}
    <script>
        $(document).on('click','.userUpdate',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.id').text());
            $('#e_name').val(_this.find('.name').text());
            $('#e_email').val(_this.find('.email').text());
            $('#e_phone_number').val(_this.find('.phone_number').text());
            $('#e_image').val(_this.find('.image').text());

            var name_role = (_this.find(".role_name").text());
            var _option = '<option selected value="' + name_role+ '">' + _this.find('.role_name').text() + '</option>'
            $( _option).appendTo("#e_role_name");

            var position = (_this.find(".position").text());
            var _option = '<option selected value="' +position+ '">' + _this.find('.position').text() + '</option>'
            $( _option).appendTo("#e_position");

            var department = (_this.find(".department").text());
            var _option = '<option selected value="' +department+ '">' + _this.find('.department').text() + '</option>'
            $( _option).appendTo("#e_department");

            var statuss = (_this.find(".statuss").text());
            var _option = '<option selected value="' +statuss+ '">' + _this.find('.statuss').text() + '</option>'
            $( _option).appendTo("#e_status");

        });
    </script>
    {{-- delete js --}}
    <script>
        $(document).on('click','.userDelete',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.ids').text());
            $('.e_avatar').val(_this.find('.image').text());
        });
    </script>
    @endsection

@endsection
