<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Detail;


class UserController extends Controller
{
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
        //return view('profile.create');
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $detail = new Detail();
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        $detail->genero = $request->input('genero');
        $detail->situacion_sentimental = $request->input('situacionSentimental');
        $detail->fecha_nacimiento = $request->input('fechaNacimiento');
        $detail->user_id = $user->id;

        $detail->save();


        //return response()->json($user.$detail,200);
        return '<script>alert("Creado");window.location.href = "http://localhost:8000/index"</script>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $detail = Detail::find($id);
                $user = User::find($detail->usuario->id);
     

     //    $user->email = $request->input('email');
     //   $user->password = $request->input('password');
     //   $user->save();
     //   $detail->genero = $request->input('genero');
     //   $detail->situacion_sentimental = $request->input('situacionSentimental');
     //  $detail->fecha_nacimiento = $request->input('fechaNacimiento');
        $detail->fill($request->all());
        $user->fill($request->all());
        $detail->save();
        $user->save();
        

        return '<script>alert("Actualizado");window.location.href = "http://localhost:8000/index"</script>';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $detail = Detail::find($id);
             $user = User::find($detail->usuario->id);

             $detail->delete();
             $user->delete();
        return '<script>alert("Eliminado");window.location.href = "http://localhost:8000/index"</script>';

             //return view('profile.index'); 


    }
}
