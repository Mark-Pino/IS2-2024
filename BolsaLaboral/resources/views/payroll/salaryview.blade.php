@extends('layouts.exportmaster')
@section('content')
    <!-- Contenedor de Página -->
    <div class="">
    <div class="page-wrapper">
        <!-- Contenido de la Página -->
        <div class="content container-fluid" id="app">
            <!-- Encabezado de Página -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col" style="margin-left: -222px;">
                        <h3 class="page-title">Recibo de Pago</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('form/salary/page') }}">Panel de Control</a></li>
                            <li class="breadcrumb-item active">Recibo de Pago</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white"><a href=""@click.prevent="printme" target="_blank">PDF</a></button>
                            <button class="btn btn-white"><i class="fa fa-print fa-lg"></i><a href="" @click.prevent="printme" target="_blank"> Imprimir</a></button>
                        </div>
                    </div>
                </div>

            <div class="row" style="margin-left: -240px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="payslip-title">Recibo de Pago para el mes de {{ \Carbon\Carbon::now()->format('M') }}   {{ \Carbon\Carbon::now()->year }}  </h4>
                            <div class="row">
                                <div class="col-sm-6 m-b-20">
                                    @if(!empty($users->avatar))
                                    <img src="{{ URL::to('/assets/images/'. $users->avatar) }}" class="inv-logo" alt="{{ $users->name }}">
                                    @endif
                                    <ul class="list-unstyled mb-0">
                                        <li>{{ $users->name }}</li>
                                        <li>{{ $users->address }}</li>
                                        <li>{{ $users->country }}</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 m-b-20">
                                    <div class="invoice-details">
                                        <h3 class="text-uppercase">Recibo de Pago #49029</h3>
                                        <ul class="list-unstyled">
                                            <li>Mes del Salario: <span>{{ \Carbon\Carbon::now()->format('M') }}  , {{ \Carbon\Carbon::now()->year }}  </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 m-b-20">
                                    <ul class="list-unstyled">
                                        <li><h5 class="mb-0"><strong>{{ $users->name }}</strong></h5></li>
                                        <li><span>{{ $users->position }}</span></li>
                                        <li>ID del Empleado: {{ $users->user_id }}</li>
                                        <li>Fecha de Ingreso: {{ $users->join_date }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <h4 class="m-b-10"><strong>Ganancias</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <?php
                                                    $a =  (int)$users->basic;
                                                    $b =  (int)$users->hra;
                                                    $c =  (int)$users->conveyance;
                                                    $e =  (int)$users->allowance;
                                                    $Total_Earnings   = $a + $b + $c + $e;
                                                ?>
                                                <tr>
                                                    <td><strong>Sueldo Básico</strong> <span class="float-right">${{ $users->basic }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Subsidio por Alquiler (H.R.A.)</strong> <span class="float-right">${{ $users->hra }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Transporte</strong> <span class="float-right">${{ $users->conveyance }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Otro Subsidio</strong> <span class="float-right">${{ $users->allowance }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Total de Ganancias</strong> <span class="float-right"><strong>$ <?php echo $Total_Earnings ?></strong></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <h4 class="m-b-10"><strong>Deducciones</strong></h4>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <?php
                                                    $a =  (int)$users->tds;
                                                    $b =  (int)$users->prof_tax;
                                                    $c =  (int)$users->esi;
                                                    $e =  (int)$users->labour_welfare;
                                                    $Total_Deductions   = $a + $b + $c + $e;
                                                ?>
                                                <tr>
                                                    <td><strong>Impuesto Deductido en el Origen (T.D.S.)</strong> <span class="float-right">${{ $users->tds }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Fondo de Previsión</strong> <span class="float-right">${{ $users->prof_tax }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>ESI</strong> <span class="float-right">${{ $users->esi }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Préstamo</strong> <span class="float-right">${{ $users->labour_welfare }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Total de Deducciones</strong> <span class="float-right"><strong>$<?php echo $Total_Deductions;?></strong></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-12" >
                                    <p><strong>Sueldo Neto: ${{ $users->salary }}</strong> (Cincuenta y nueve mil seiscientos noventa y ocho solamente.)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Contenido de la Página -->
    </div>
    <!-- /Contenedor de Página -->
    </div>
@endsection
