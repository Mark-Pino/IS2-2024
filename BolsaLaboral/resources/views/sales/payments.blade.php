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
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Pagos</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel de Control</a></li>
                            <li class="breadcrumb-item active">Pagos</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable mb-0">
                            <thead>
                                <tr>
                                    <th>ID de Factura</th>
                                    <th>Cliente</th>
                                    <th>Tipo de Pago</th>
                                    <th>Fecha de Pago</th>
                                    <th>Monto Pagado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="invoice-view.html">#FAC-0001</a></td>
                                    <td>
                                        <h2><a href="#">Global Technologies</a></h2>
                                    </td>
                                    <td>Paypal</td>
                                    <td>8 Feb 2019</td>
                                    <td>$500</td>
                                </tr>
                                <tr>
                                    <td><a href="invoice-view.html">#FAC-0002</a></td>
                                    <td>
                                        <h2><a href="#">Delta Infotech</a></h2>
                                    </td>
                                    <td>Paypal</td>
                                    <td>8 Feb 2019</td>
                                    <td>$500</td>
                                </tr>
                                <tr>
                                    <td><a href="invoice-view.html">#FAC-0003</a></td>
                                    <td>
                                        <h2><a href="#">Cream Inc</a></h2>
                                    </td>
                                    <td>Paypal</td>
                                    <td>8 Feb 2019</td>
                                    <td>$500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->

    @section('script')
    @endsection
@endsection
