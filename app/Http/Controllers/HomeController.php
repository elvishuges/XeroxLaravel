<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Arquivo;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

   public function perfilXerox($id)
    {
        $xerox = \App\Xerox::find($id);        
       return view('perfilXerox',compact('xerox'));
   }

   public function minhasImpressoes()
   {
    return view('minhasImpressoes');
   }

    public function postArquivo(Request $request)
   {
    //dd($request->all()); 
    $arquivo = $request->file('arquivo');
    $nomeArquivo = $arquivo->getClientOriginalName();
    $hash = Hash::make('test');


    //Storage::disk('local')->put($nomeArquivo,file_get_contents($arquivo->getRealPath()));
    //$dataBusca = $request->input('dataBusca');
    echo $hash;
    //return redirect()->route('home');  
      //return $hash;
    //return view('postArquivo');
   }

    public static function getXerox()
    {
      $xeroxes = \App\Xerox::paginate(1);
       // $xeroxescomp = compact('xeroxes');
       //  $xeroxes->paginate(3);
       return $xeroxes;
      
    }



}
