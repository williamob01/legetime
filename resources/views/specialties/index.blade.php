@extends('layouts.app')

@section('css')
<link href="{{ URL::asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('header')
<div class="dashboard_bar">Especialidades</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-md-flex d-block mb-3 align-items-center">
        <div class="page-titles d-md-flex d-block mb-0 align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Legetime</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Especialidades</a></li>
            </ol>
        </div>
        <button type="button" class="btn btn-rounded btn-outline-success btn-sm ml-auto"><i class="las la-plus-circle scale5 mr-3"></i>Nuevo</button>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($specialties as $specialty)
                                <tr>
                                    <td>{{ $specialty->id }}</td>
                                    <td>{{ $specialty->name }}</td>
                                    <td>{{ $specialty->description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
    </div>
</div>
@endsection

@section('script')
<!-- Datatable -->
    <script src="{{  URL::asset('vendor/datatables/js/jquery.dataTables.min.js')  }}"></script>
    <script src="{{  URL::asset('js/plugins-init/datatables.init.js')  }}"></script>
@endsection
