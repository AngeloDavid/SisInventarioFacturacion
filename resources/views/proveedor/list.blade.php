 
 <div class="table-responsive">
        <table id="zero_config" class="table table-hover display compact">
            <thead>
                <tr>
                    <th>RUC</th>
                    <th>Razon social</th>
                    <th>E-mail</th>
                    <th>Dirreccion</th>
                    <th>Tipo</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                    <th>Accion</th>
                </tr>
            </thead>
           <tbody>
                @foreach ($proveedors as $prov)
                <tr>
                        <td>{{ $prov->ruc }}</td>
                        <td>{{ $prov->name }} <br>                                            
                            <strong>Origen:</strong> {{ $prov->origin }}
                        </td>
                        <td>{{ $prov->email }}</td>
                        <td>{{ $prov->address }}</td>
                        <td>{{ $prov->type }}</td>
                        <td>{{ $prov->phone1 }}  <br>
                                <strong>Contacto:</strong> {{ $prov->contact }}
                        </td>
                       
                        <td>{{ $prov->created_at }}</td>
                        <td>
                            @if ($prov->status = 1)
                                <a href="{{ url('/Proveedor/'.$prov->id) }}" class="btn btn-block btn-outline-info"><i class=" fas fa-pencil-alt"> Editar </i></a>
                                <a  href="{{ url('/Proveedor/delete/'.$prov->id) }}" class="btn btn-block btn-outline-danger"><i class=" fas fa-trash-alt"></i> Deshabilitar </a>
                            @else
                                <a href="{{ url('/Proveedor/delete/'.$prov->id) }}" class="btn btn-block btn-outline-success"><i class=" fas fa-undo"> Habilitar </i></a>
                            @endif
                            
                        </td>
                    </tr>
                @endforeach  
           </tbody>      
        </table>
    </div>
{{ $proveedors->links() }} 