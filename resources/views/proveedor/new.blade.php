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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <h4 class="card-title">Ingrese los siguientes datos de la Empresa <h3>{{ $proveedor->name }}</h3></h4>
                </div>
                <form class="form-horizontal" name="Form1" id="Form1" novalidate method="POST"  action="{{url($urlForm)}}">
                        {!! csrf_field() !!}
                        @if (!$isnew)
                            {{ method_field('PUT') }}
                        @endif
                    <div class="card-body">                        
                    <div class="row">
                        <div class="col-md-6 col-12 col-lg-6">
                                <div class="form-group row">
                                    <label for="ruc" class="col-sm-3 text-right control-label col-form-label">RUC</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ruc" name="ruc" placeholder="Max. 13 caracteres" value="{{ old('ruc',$proveedor->ruc) }}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9"> 
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Razón social de la empresa" value="{{ old('name',$proveedor->name) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Ex: ejemplo@correo.com" value="{{ old('email',$proveedor->email) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-3 text-right control-label col-form-label">Dirección</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="" value="{{ old('address',$proveedor->address) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="city" class="col-sm-3 text-right control-label col-form-label">Ciudad</label>
                                        <div class="col-sm-9" >
                                            <input type="text" class="form-control" id="city" name="city" placeholder="" value="{{ old('city',$proveedor->city) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="country" class="col-sm-3 text-right control-label col-form-label">Pais</label>
                                            <div class="col-sm-9" >
                                                <input type="text" class="form-control" id="country" name="country" placeholder="" value="{{ old('country',$proveedor->country) }}">
                                            </div>
                                        </div>
                                    
                                    <div class="form-group row">
                                            <label for="contact" class="col-sm-3 text-right control-label col-form-label">Contacto</label>
                                            <div class="col-sm-9" >
                                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Nombre del Contacto en la empresa" value="{{ old('contact',$proveedor->contact) }}">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Teléfono 1</label>
                                            <div class="col-sm-9" >
                                                <input type="text" class="form-control" id="phone1" name="phone1" placeholder="Ex: 02 325 8745" value="{{ old('phone1',$proveedor->phone1) }}">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Teléfono 2</label>
                                            <div class="col-sm-9" >
                                                <input type="text" class="form-control" id="phone2" name="phone2"  placeholder="Ex: 09 985 520 52" value="{{ old('phone2',$proveedor->phone2) }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Tipo</label>
                                                <div class="col-sm-9" >
                                                    <select name="type" id="type" class="form-control">
                                                        @if ($proveedor->type != 'Juridica')
                                                            <option value="Natural" selected>Natural</option>
                                                            <option value="Juridica" >Juridica</option>
                                                        @else                                                            
                                                            <option value="Natural" >Natural</option>
                                                            <option value="Juridica" selected>Juridica</option>
                                                        @endif                                                           
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Origen</label>
                                                    <div class="col-sm-9" >
                                                        <select name="origin" id="origin" class="form-control" value="{{ old('origin',$proveedor->origin) }}" >                                                            
                                                            @if ($proveedor->origin != 'Extranjero')
                                                                <option value="Nacional" selected>Nacional</option>
                                                                <option value="Extranjero" >Extranjero</option>
                                                            @else                                                               
                                                                <option value="Nacional" >Nacional</option>
                                                                <option value="Extranjero" selected>Extranjero</option>
                                                            @endif                                                           
                                                </select>
                                            </div>
                                        </div>                                    
                        </div>
                        <div class="col-md-6 col-12 col-lg-6">                            
                            <div class="text-center">
                                <img data-src="holder.js/200x200" class="rounded" alt="200x200" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16482395036%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16482395036%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.4296875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 200px;">                                
                            </div>
                           <br>
                           <div class="form-group row">
                                <label class="col-md-3">Cambiar Logo</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="logo" name="logo" required="">
                                        <label class="custom-file-label" for="validatedCustomFile">Elegir logo</label>
                                        <div class="invalid-feedback">Formato invalido</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Observaciones</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="5" name="notes" id="notes" >
                                                {{ old('notes',$proveedor->notes) }}
                                        </textarea>
                                    </div>
                            </div>
                            @if (!$isnew)
                                <div class="form-group row">
                                        <label class="col-md-3" for="disabledTextInput">Fecha de Creación</label>
                                        <div class="col-md-9">
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled="" value="{{ old('created_at',$proveedor->created_at) }}">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-md-3" for="disabledTextInput">Fecha de Modificación</label>
                                        <div class="col-md-9">
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled="" value="{{ old('created_at',$proveedor->updated_at) }}">
                                        </div>
                                </div>   
                            @endif
                            
                        </div>
                    </div>
                        
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            @if ($isnew)
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>&nbsp;Crear</button>    
                                <button type="button" id="btnLimpiar" class="btn btn-primary"><i class="fas fa-eraser"></i>&nbsp;Borrar</button>                            
                            @else
                                <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i>&nbsp;Editar</button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;Deshabilitar</button>
                            @endif                            
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
@section('jsScript')
    <script>
            $("#btnLimpiar").click(function(event) {
                $("#Form1")[0].reset();
            });
    </script>
@endsection