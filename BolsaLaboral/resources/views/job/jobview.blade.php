@extends('layouts.job')
@section('content')
    {{-- mensaje --}}
    {!! Toastr::message() !!}
    <!-- Contenedor Principal -->
    <div class="main-wrapper">
        <!-- Encabezado -->
        <div class="header">
            <!-- Logo -->
            <div class="header-left">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ URL::to('assets/img/logo.png') }}" width="40" height="40" alt="">
                </a>
            </div>
            <!-- /Logo -->
            <!-- Título del Encabezado -->
            <div class="page-title-box float-left">
                <h3>Empleos</h3>
            </div>
            <!-- /Título del Encabezado -->
            <!-- Menú del Encabezado -->
            <ul class="nav user-menu">
                <!-- Búsqueda -->
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="search.html">
                            <input class="form-control" type="text" placeholder="Buscar aquí">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <!-- /Búsqueda -->
                <!-- Bandera -->
                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        <img src="{{ URL::to('assets/img/flags/us.png') }}" alt="" height="20"> <span>Español</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ URL::to('assets/img/flags/us.png') }}" alt="" height="16"> Español
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ URL::to('assets/img/flags/kh.png') }}" alt="" height="16"> Ingles
                        </a>
                    </div>
                </li>
                <!-- /Bandera -->

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                </li>
            </ul>
            <!-- /Menú del Encabezado -->

            <!-- Menú Móvil -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('login') }}">Iniciar sesión</a>
                    <a class="dropdown-item" href="{{ route('register') }}">Registrarse</a>
                </div>
            </div>
            <!-- /Menú Móvil -->

        </div>
        <!-- /Encabezado -->

        <!-- Contenedor de Página -->
        <div class="page-wrapper job-wrapper">
            <!-- Contenido de la Página -->
            <div class="content container">
                <!-- Encabezado de Página -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Empleos</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel de Control</a></li>
                                <li class="breadcrumb-item active">Empleos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Encabezado de Página -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="job-info job-widget">
                            <h3 class="job-title">{{ $job_view[0]->job_title }}</h3>
                            <span class="job-dept">{{ $job_view[0]->department }}</span>
                            <ul class="job-post-det">
                                <li><i class="fa fa-calendar"></i> Fecha de Publicación: <span class="text-blue">{{ date('d F, Y',strtotime($job_view[0]->start_date)) }}</span></li>
                                <li><i class="fa fa-calendar"></i> Última Fecha: <span class="text-blue">{{ date('d F, Y',strtotime($job_view[0]->expired_date)) }}</span></li>
                                <li><i class="fa fa-user-o"></i> Aplicaciones: <span class="text-blue">4</span></li>
                                <li><i class="fa fa-eye"></i> Vistas: <span class="text-blue">
                                    @if (!empty($job_view[0]->count))
                                        {{ $job_view[0]->count }}
                                        @else
                                        0
                                    @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="job-content job-widget">
                            <div class="job-desc-title"><h4>Descripción del Trabajo</h4></div>
                            <div class="job-description">
                                <p>{{ $job_view[0]->description }}</p>
                            </div>
                            <div class="job-desc-title"><h4>Descripción Adicional</h4></div>
                            <div class="job-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <ul class="square-list">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="job-det-info job-widget">
                            <a class="btn job-btn" href="#" data-toggle="modal" data-target="#apply_job">Aplicar para este Trabajo</a>
                            <div class="info-list">
                                <span><i class="fa fa-bar-chart"></i></span>
                                <h5>Tipo de Trabajo</h5>
                                <p>{{ $job_view[0]->job_type }}</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-money"></i></span>
                                <h5>Salario</h5>
                                <p>{{ $job_view[0]->salary_from }}$ - {{ $job_view[0]->salary_to }}$</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-suitcase"></i></span>
                                <h5>Experiencia</h5>
                                <p>{{ $job_view[0]->experience }}</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-ticket"></i></span>
                                <h5>Vacantes</h5>
                                <p>{{ $job_view[0]->no_of_vacancies }}</p>
                            </div>
                            <div class="info-list">
                                <span><i class="fa fa-map-signs"></i></span>
                                <h5>Ubicación</h5>
                                <p>{{ $job_view[0]->job_location }}</p>
                            </div>
                            <div class="info-list">
                                <p class="text-truncate"> +51 974 981 999
                                <br> <a href="https://pe.linkedin.com" title="https://pe.linkedin.com">https://pe.linkedin.com</a>
                                <br> <a href="https://pe.linkedin.com" target="_blank" title="https://pe.linkedin.com">https://pe.linkedin.com</a>
                                </p>
                            </div>
                            <div class="info-list text-center">
                                <a class="app-ends" href="#">La aplicación finaliza en 2d 7h 6m</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Contenido de la Página -->

            <!-- Modal de Aplicación de Trabajo -->
            <div class="modal custom-modal fade" id="apply_job" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Añade tus Datos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Nombre Completo</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Adjuntar CV</label>
                                    <input class="form-control" type="file">
                                </div>
                                <div class="form-group">
                                    <label>Mensaje</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <div class="submit-section text-center">
                                    <button class="btn btn-primary submit-btn" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal de Aplicación de Trabajo -->
        </div>
        <!-- /Contenedor de Página -->
    </div>
@endsection
