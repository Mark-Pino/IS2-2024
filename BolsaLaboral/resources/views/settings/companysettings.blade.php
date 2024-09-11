@extends('layouts.settings')
@section('content')
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div class="sidebar-menu">
                <ul>
                    <li><a href="{{ route('home') }}"><i class="la la-home"></i> <span>Volver al Inicio</span></a></li>
                    <li class="menu-title">Configuración</li>
                    <li class="active"><a href="{{ route('company/settings/page') }}"><i class="la la-building"></i><span>Configuración de la Empresa</span></a></li>
                    <li><a href="localization.html"><i class="la la-clock-o"></i><span>Localización</span></a></li>
                    <li><a href="theme-settings.html"><i class="la la-photo"></i><span>Configuración del Tema</span></a></li>
                    <li><a href="{{ route('roles/permissions/page') }}"><i class="la la-key"></i><span>Roles y Permisos</span></a></li>
                    <li><a href="email-settings.html"><i class="la la-at"></i><span>Configuración del Correo</span></a></li>
                    <li><a href="performance-setting.html"><i class="la la-chart-bar"></i><span>Configuración del Rendimiento</span></a></li>
                    <li><a href="approval-setting.html"><i class="la la-thumbs-up"></i><span>Configuración de Aprobaciones</span></a></li>
                    <li><a href="invoice-settings.html"><i class="la la-pencil-square"></i><span>Configuración de Facturas</span></a></li>
                    <li><a href="salary-settings.html"><i class="la la-money"></i><span>Configuración de Salarios</span></a></li>
                    <li><a href="notifications-settings.html"><i class="la la-globe"></i><span>Notificaciones</span></a></li>
                    <li><a href="{{ route('change/password') }}"><i class="la la-lock"></i><span>Cambiar Contraseña</span></a></li>
                    <li><a href="leave-type.html"><i class="la la-cogs"></i><span>Tipo de Permiso</span></a></li>
                    <li><a href="toxbox-setting.html"><i class="la la-comment"></i><span>Configuración de ToxBox</span></a></li>
                    <li><a href="cron-setting.html"><i class="la la-rocket"></i><span>Configuración de Cron</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Configuración de la Empresa</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nombre de la Empresa <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="Soeng Souy">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Persona de Contacto</label>
                                    <input class="form-control " value="Soeng Souy" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input class="form-control " value="3864 Bld 110 PP, CA, 91403" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>País</label>
                                    <select class="form-control select">
                                        <option>JAPONÉS</option>
                                        <option>EE.UU.</option>
                                        <option>Reino Unido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input class="form-control" value="Phnom Penh" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Estado/Provincia</label>
                                    <select class="form-control select">
                                        <option>Phnom Penh</option>
                                        <option>Pursat</option>
                                        <option>Kan dal</option>
                                        <option>Ta Keav</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Código Postal</label>
                                    <input class="form-control" value="12000" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Correo Electrónico</label>
                                    <input class="form-control" value="example@gmail.com" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Número de Teléfono</label>
                                    <input class="form-control" value="855-978-7102" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Número de Móvil</label>
                                    <input class="form-control" value="855-635-5579" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input class="form-control" value="818-978-7102" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>URL del Sitio Web</label>
                                    <input class="form-control" value="https://www.soengsouy.com" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@endsection
