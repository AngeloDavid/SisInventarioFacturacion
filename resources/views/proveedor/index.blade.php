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
                    @if (count($proveedors)<1)
                    <div class="alert alert-warning" role="alert">
                        Ha un no exisite Proveedores creados <br>
                        <a href="{{ url('Proveedor/new') }}"> <i class="mdi-library-plus"></i> Crear un proveedor </a>
                    </div>
                    @else
                    <div class="provs">
                        @include('proveedor.list')
                    </div>                   
                        
                     @endif
                </div>
                <div class="card-footer">
                     <strong>Total Registros : </strong> {{ $proveedors->total() }}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsScript')
    @parent    
    <script>
            $(function() {
                $('body').on('click', '.pagination a', function(e) {
                    e.preventDefault();
            
                    /*$('#load a').css('color', '#dfecf6');
                    $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');
                    */
                    var url = $(this).attr('href');  
                    getArticles(url);
                    window.history.pushState("", "", url);
                });
            
                function getArticles(url) {
                    $.ajax({
                        url : url  
                    }).done(function (data) {
                        $('.provs').html(data);  
                    }).fail(function () {
                        //Modificar mejor
                        alert('Proveedores no encontrados');
                    });
                }
            });
        
    </script>
@endsection