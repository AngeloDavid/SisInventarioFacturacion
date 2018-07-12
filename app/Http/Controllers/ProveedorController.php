<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    var $title="Provedor";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title=$this->title."es";
        $proveedors = DB::table('proveedors')->latest('created_at')->paginate(2);
        if ($request->ajax()) {
            return view('proveedor.list', ['proveedors' => $proveedors])->render();  
        }
        return view ('proveedor.index',compact('title','proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isnew=true;
        $title=$this->title." - Nuevo";
        $urlForm ='Proveedor/store';
        $proveedor = new Proveedor();
        return view ('proveedor.new',compact('title','isnew','urlForm','proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->all();
        
       Proveedor::create([
        'ruc'=>$data['ruc'], 
        'name'=>$data['name'], 
        'logo'=>$data['logo'],
        'email'=>$data['email'],
        'address'=>$data['address'],
        'city'=>$data['city'],
        'country'=>$data['country'],
        'type'=>$data['type'],
        'origin'=>$data['origin'],
        'phone1'=>$data['phone1'],
        'phone2'=>$data['phone2'],
        'contact'=>$data['contact'],
        'notes' => $data['notes'],
        'status'=>1
       ]);
       return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor=Proveedor::find($id);
        $isnew=false;
        $title=$this->title." - Editar";
        $urlForm ='Proveedor/'.$id.'/editar';
        return view ('proveedor.new',compact('title','isnew','urlForm','proveedor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = request()->all();
        $proveedor=Proveedor::find($id);
        $proveedor->update ($data);
        $proveedor->save();
        return redirect()->route('Proveedor.show',['id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        //
    }

    public function getAllProveedores()
    {
        # code...
    }
}
