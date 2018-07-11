@extends('base')
@section('title')
    {{ $title }}
@endsection
@section('cssScript')
@parent
<link href= "{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection
@section('centro')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de Proveedores</h5>
                    @foreach ($proveedors as $proveedor)
                    {{ $proveedor->name }}
                    @endforeach
                </div>
                <div class="card-footer">
                    {{ $proveedors->appends(['sort' => 'votes'])->links() }}    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsScript')
    @parent
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('.table').DataTable();
    </script>
@endsection