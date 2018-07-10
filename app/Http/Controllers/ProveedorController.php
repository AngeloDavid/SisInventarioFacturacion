<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    var $title="Provedor";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isnew=true;
        $title=$this->title;
        $urlForm ='Proveedor/store';
        return view ('proveedor.new',compact('title','isnew','urlForm'));
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
        var_dump($data);
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
    public function show(Proveedor $proveedor)
    {
        //
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
    public function update(Request $request, Proveedor $proveedor)
    {
        //
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
}
