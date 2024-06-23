<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Quiz2;
use App\Models\Quiz1;
use App\Models\Quiz3;
use App\Models\Quiz4;
use App\Models\Quiz5;
use App\Models\Quiz6;

class CursoController extends Controller
{
    //

    public function showall()
    {
        //

        $as = Curso::all(); //paginate(25);  //::all()
        return response()->json([
            'status' => 'success',
            'mensaje' => 'Lista de cursos recuperada con èxito',
            'data' => $as
        ]);
      
    }
    public function show($id) //for individual resource
    {
        //          //model
        $as = Curso::where('id','=',$id)->first();   //mejor findor fail     //was get(), pero da como resultado un array al que hay que acceder con data['data'][0]

        return response()->json([
            'status' => 'success',
            'mensaje' => 'Curso recuperado con éxito',
            'data' => $as
        ]);
    }

    public function showalumno($id) //for individual resource
    {
       
        $as = Curso::where('idalumno','=',$id)->first();   //mejor findor fail     //was get(), pero da como resultado un array al que hay que acceder con data['data'][0]

        return response()->json([
            'status' => 'success',
            'mensaje' => 'Curso recuperado con éxito',
            'data' => $as
        ]);
    }

    public function showdecurso($id) //from maestro
    {
        //          //model
        $as = Curso::where('idalumno','=',$id)->get();   //mejor findor fail     //was get(), pero da como resultado un array al que hay que acceder con data['data'][0]

        return response()->json([
            'status' => 'success',
            'mensaje' => 'Curso recuperado con éxito',
            'data' => $as
        ]);
    }


   /* public function store(Request $request)
    {
        //
        $as = Curso::create($request->all());
        
        return response()->json([
          'status' => 'success',
          'mensaje' => 'Curso registrado con éxito',
          'data' => $as
      ]);
        }*/

        public function updatecurso(Request $request,$id)        //ws $equip, but...
        {
            $curso = Curso::where('idalumno', $id)->first();

    // If the Curso doesn't exist, return an error response
    if (!$curso) {
        return response()->json([
            'status' => 'error',
            'message' => 'Curso not found',
        ], 404);
    }

    // Update the Curso with the request data
    $curso->fill($request->all());

    // Save the changes to the database
    $curso->save();

    // Return a success response
    return response()->json([
        'status' => 'success',
        'message' => 'Curso updated successfully',
        'data' => $curso,
    ]);
}
            

    
public function showallquiz1()
{
    $as = Quiz1::all(); //paginate(25);  //::all()
    return response()->json([
        'status' => 'success',
        'mensaje' => 'Lista de cursos recuperada con èxito',
        'data' => $as
    ]);
  
}
public function showallquiz2()
{
    $as = Quiz2::all(); //paginate(25);  //::all()
    return response()->json([
        'status' => 'success',
        'mensaje' => 'Lista de cursos recuperada con èxito',
        'data' => $as
    ]);
  
}
public function showallquiz3()
{
    $as = Quiz3::all(); //paginate(25);  //::all()
    return response()->json([
        'status' => 'success',
        'mensaje' => 'Lista de cursos recuperada con èxito',
        'data' => $as
    ]);
  
}
public function showallquiz4()
{
    $as = Quiz4::all(); //paginate(25);  //::all()
    return response()->json([
        'status' => 'success',
        'mensaje' => 'Lista de cursos recuperada con èxito',
        'data' => $as
    ]);
  
}
public function showallquiz5()
{
    $as = Quiz5::all(); //paginate(25);  //::all()
    return response()->json([
        'status' => 'success',
        'mensaje' => 'Lista de cursos recuperada con èxito',
        'data' => $as
    ]);
  
}
public function showallquiz6()
{
    $as = Quiz6::all(); //paginate(25);  //::all()
    return response()->json([
        'status' => 'success',
        'mensaje' => 'Lista de cursos recuperada con èxito',
        'data' => $as
    ]);
  
}
















        public function storequiz1(Request $request)
        {
            //
            $as = Quiz1::create($request->all());
            
            return response()->json([
              'status' => 'success',
              'mensaje' => 'Curso registrado con éxito',
              'data' => $as
          ]);
            }

            public function storequiz2(Request $request)
            {
                //
                $as = Quiz2::create($request->all());
                
                return response()->json([
                  'status' => 'success',
                  'mensaje' => 'Curso registrado con éxito',
                  'data' => $as
              ]);
                }

            
                public function storequiz3(Request $request)
                {
                    //
                    $as = Quiz3::create($request->all());
                    
                    return response()->json([
                      'status' => 'success',
                      'mensaje' => 'Curso registrado con éxito',
                      'data' => $as
                  ]);
                    }

                    public function storequiz4(Request $request)
                    {
                        //
                        $as = Quiz4::create($request->all());
                        
                        return response()->json([
                          'status' => 'success',
                          'mensaje' => 'Curso registrado con éxito',
                          'data' => $as
                      ]);
                        }

                        public function storequiz5(Request $request)
                        {
                            //
                            $as = Quiz5::create($request->all());
                            
                            return response()->json([
                              'status' => 'success',
                              'mensaje' => 'Curso registrado con éxito',
                              'data' => $as
                          ]);
                            }
                            public function storequiz6(Request $request)
                            {
                                //
                                $as = Quiz6::create($request->all());
                                
                                return response()->json([
                                  'status' => 'success',
                                  'mensaje' => 'Curso registrado con éxito',
                                  'data' => $as
                              ]);
                                }
            



                public function getquiz1($id) //from maestro
                {
                    //          //model
                   // $as =Quiz1::where('idalumno','=',$id)->get();  //mejor findor fail     //was get(), pero da como resultado un array al que hay que acceder con data['data'][0]
                    $as = Quiz1::where('idalumno', '=', $id)->orderBy('created_at', 'desc')->first();

                    return response()->json([
                        'status' => 'success',
                        'mensaje' => 'Curso recuperado con éxito',
                        'data' => $as
                    ]);
                }
                public function getquiz2($id) //from maestro
                {
                    //          //model
                   // $as =Quiz1::where('idalumno','=',$id)->get();  //mejor findor fail     //was get(), pero da como resultado un array al que hay que acceder con data['data'][0]
                    $as = Quiz2::where('idalumno', '=', $id)->orderBy('created_at', 'desc')->first();

                    return response()->json([
                        'status' => 'success',
                        'mensaje' => 'Curso recuperado con éxito',
                        'data' => $as
                    ]);
                }

                public function getquiz3($id) //from maestro
                {
                    //          //model
                   // $as =Quiz1::where('idalumno','=',$id)->get();  //mejor findor fail     //was get(), pero da como resultado un array al que hay que acceder con data['data'][0]
                    $as = Quiz3::where('idalumno', '=', $id)->orderBy('created_at', 'desc')->first();

                    return response()->json([
                        'status' => 'success',
                        'mensaje' => 'Curso recuperado con éxito',
                        'data' => $as
                    ]);
                }

                public function getquiz4($id) //from maestro
                {
                    //          //model
                   // $as =Quiz1::where('idalumno','=',$id)->get();  //mejor findor fail     //was get(), pero da como resultado un array al que hay que acceder con data['data'][0]
                    $as = Quiz4::where('idalumno', '=', $id)->orderBy('created_at', 'desc')->first();

                    return response()->json([
                        'status' => 'success',
                        'mensaje' => 'Curso recuperado con éxito',
                        'data' => $as
                    ]);
                }

                public function getquiz5($id) //from maestro
                {
                    //          //model
                   // $as =Quiz1::where('idalumno','=',$id)->get();  //mejor findor fail     //was get(), pero da como resultado un array al que hay que acceder con data['data'][0]
                    $as = Quiz5::where('idalumno', '=', $id)->orderBy('created_at', 'desc')->first();

                    return response()->json([
                        'status' => 'success',
                        'mensaje' => 'Curso recuperado con éxito',
                        'data' => $as
                    ]);
                }

                public function getquiz6($id) //from maestro
                {
                    //          //model
                   // $as =Quiz1::where('idalumno','=',$id)->get();  //mejor findor fail     //was get(), pero da como resultado un array al que hay que acceder con data['data'][0]
                    $as = Quiz6::where('idalumno', '=', $id)->orderBy('created_at', 'desc')->first();

                    return response()->json([
                        'status' => 'success',
                        'mensaje' => 'Curso recuperado con éxito',
                        'data' => $as
                    ]);
                }






        public function update(Request $request,$id)        //ws $equip, but...
        {
            //
            $as = Curso::where('id','=',$id)->first();
    
            $input = $request->all();
       $as->fill($input)->save();
    
       return response()->json([
        'status' => 'success',
        'mensaje' => 'Curso actualizado con éxito',
        'data' => $as
    ]);
            //  return $empleadonuevo;
        }


}
