@extends('layouts.app2')

@section('content')


@section('titulo', 'Datos Personales')
                    
      <!-- / .main-navbar -->
          <div class="card card-small py-3 mb-4 d-flex align-items-center">
            <div class="main-content-container container-fluid px-4">
              <!-- Page Header -->
              <div class="page-header row no-gutters py-4">
                <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                  <span class="text-uppercase page-subtitle">Vista General</span>
                  <h3 class="page-title">Información Detallada</h3>
                </div>
              </div>
              <!-- End Page Header -->
              <!-- Default Light Table -->
              <div class="row">
                <div class="col-lg-4">
                  <div class="card card-small mb-4 pt-3">
                    <div class="card-header border-bottom text-center">
                      <div class="mb-3 mx-auto">
                        <img class="rounded-circle" src="{{ asset('images/hola8.png') }}" alt="User Avatar" width="110"> </div>
                      <h4 class="mb-0">{{Auth::user()->nombre}}</h4>
                      <span class="text-muted d-block mb-2">Usuario</span>
                      
                    </div>
                    
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                      <h6 class="m-0">Detalles de la cuenta</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item p-3">
                        <div class="row">
                          <div class="col"> 
                            <div class="form-row">

                  <table style="width:90%"> <!-- Utilizacion de una tabla para mostrar los iconos-->
                            <tr>
                              <!-- Volver Atras -->
                              <th>                              
                            <div class="alert alert-success ">
                                    Total INGRESOS: $3.327.170
                            </div>
                            <div class="alert alert-danger">
                                    Total EGRESOS: $11.401.010
                             </div>
                            </th>
                          </tr>
                     </table>

                          
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-small py-3 mb-4 d-flex align-items-center">
            <div class="main-content-container container-fluid px-4">
              <!-- Page Header -->
              <div class="page-header row no-gutters py-4">
                <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                  <span class="text-uppercase page-subtitle"></span>
                  <h3 class="page-title">Cuentas Asociadas</h3>
                </div>
              </div>
              <div class="row">
                <div class="col">
                <div class="col-lg-4">
                  <div class="card card-small mb-4 pt-3">
                    <div class="card-header border-bottom text-center">
                      <div class="mb-3 mx-auto">
                        {{-- <h5><i class="fab fa-cc-visa"></i></h5> --}}
                        <div class="mb-3 mx-auto">
                          <img  src="{{ asset('images/download2.png') }}" alt="User Avatar" width="110"> 
                        </div>
                      </div>
                    </div>
                    {{-- <div class="center">
                      <a class="btn btn" class="col-sm-6" href="/clients/{{$clienteactual->rut}}"><i class="fas fa-upload"></i>   Ver Información</a>
                    </div> --}}
                    <a class="btn btn-success" href="/clients/{{$clienteactual->rut}}">Ver Información</a>
                    {{-- <button type="button" href="{{ url('/clients/' . $clienteactual->rut) }}" >Ver Información</button>
                    <a href="/clients/{{$clienteactual->rut}}">Aqui</a> --}}
                  </div>
                </div>
              </div>
              
            </div>
            
          </div>
          


@endsection
