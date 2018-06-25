<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\User;
class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::all();
       // $users = Users::all();
        //return response()->json($details, 200);
        return view('profile.index',compact('details'));
        //return view('profile.index',compact(response()->json($details, 200)));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
       
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Detail::find($id);
        $user = User::find($detail->usuario->id);
       // return $detail;
        //return view('profile.show');
        $profile = Array();

         array_push( $profile , $user);
         array_push( $profile , $detail);
         //return $profile;

        //return view('profile.show',compact('profile'));
         return view('profile.show',compact('user','detail'));
    
    }
///        public function show($id)
 //   {
 //       $detail = Detail::find($id);
 //       $user = User::find($detail->user->id);
 //      // return $detail;
 //       //return view('profile.show');
 //       $profile = Array();
//
 //        array_push( $profile , $user);
 //        array_push( $profile , $detail);
//
 //       return view('profile.show',compact('profile'));
 //   
 //   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Detail::find($id);
        $user = User::find($detail->usuario->id);
        //return $detail;
        return view('profile.edit',compact('user','detail'));
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
    //    $detail = Detail::find($id);
        //$user = User::find($detail->usuario->id);
     

    //    $user->email = $request->input('email');
     //   $user->password = $request->input('password');
     //   $user->save();
     //   $detail->genero = $request->input('genero');
     //   $detail->situacion_sentimental = $request->input('situacionSentimental');
      //  $detail->fecha_nacimiento = $request->input('fechaNacimiento');
      //  $detail->fill($request->all());
      //  $detail->save();


       // return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
