<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Arquivo;
use Illuminate\Support\Facades\Hash;
use App\Xerox;
use Illuminate\Http\Response;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $xerox;
    private $arquivo;

    public function __construct(Xerox $xerox,Arquivo $arquivo)
    {
     $this->xerox = $xerox;
     $this->arquivo = $arquivo;
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
       $user = Auth::user();
       $arquivos = \App\User::find(Auth::user()->id)->arquivos;         
       return view('minhasImpressoes',compact('arquivos'));
    }

    public function meusServicos()
    {
      $user = Auth::user();
      $xeroxes = \App\User::find(Auth::user()->id)->xeroxes;         
      return view('meusServicos',compact('xeroxes'));
    }

    public function criarServico()
    {
      return view('criarServico');
    }

    public function postArquivo(Request $request)
    {
      //dd($request->all()); 
      //$exists = false;
     
      $arquivo = $request->file('arquivo');
      $mime = $arquivo->getClientMimeType();
      //echo($mime);
      
      $nomeArquivo = $arquivo->getClientOriginalName();
      $exists = Storage::disk('local')->exists($nomeArquivo);
      $hash = Hash::make($nomeArquivo); // gera a hash
      $hash2 = str_replace("/" , '.' , $hash); // remove as barra      
      $hash3 = substr($hash2, 0, -40); // diminui 30 caracteres 
      $hashFinal = $hash3.$nomeArquivo; // concatena as strings
      //echo($request->dataDebusca);
      //dd($request->all()); 
      Arquivo::create([
        'mime' => $mime,
        'nome' => $nomeArquivo,
        'nomeXerox' => $request->nomeXerox,
        'hash' => $hashFinal,
        'dataDeBusca' =>$request->dataDeBusca,
        'xerox_id' =>$request->xeroxes_id,
        'user_id' =>Auth::user()->id,
        'nomeUsuario' => Auth::user()->name,
        ]);
   
      Storage::disk('local')->put($hashFinal,file_get_contents($arquivo->getRealPath()));       
       $user = Auth::user();
       $arquivos = \App\User::find(Auth::user()->id)->arquivos; 
      return view('minhasImpressoes',compact('arquivos'));
    }

    public static function getXerox()
    {
      $xeroxes = \App\Xerox::paginate(3);
       // $xeroxescomp = compact('xeroxes');
       //  $xeroxes->paginate(3);
      return $xeroxes;
    }

    public  function criarXerox(Request $request)
    {
      //dd($request->all()); 
      $xerox = $this->xerox->create($request->all());
      return redirect()->route('home');
    }

    public static function getArquivosDeXerox($id)
    {
       $arquivos = \App\Xerox::find($id)->arquivos;
       return $arquivos;
    }

    public function baixarArquivo(Request $request)
    {
      //public function get($filename){
      //dd($request->all()); 
      $filename = $request->input('hashArquivo');
      $file = Storage::disk('local')->get($filename);
      //return response()->download($file);
      return (new Response($file, 200))
              ->header('Content-Type', '');

      //$pathToFile=storage_path()."\app/".$filename;
 
// $file_path = public_path($pathToFile);
    //return response()->download($file_path);
     // $contents = Storage::get( $filename);

      //$file = Storage::disk('local')->get($filename);
      //return response()->download($contents);
    }

     

  }
