<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Storage;
use App\Arquivo;
use Illuminate\Support\Facades\Hash;
use App\Xerox;

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
      return view('meusServicos');
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
      $nomeArquivo = $arquivo->getClientOriginalName();
      $exists = Storage::disk('local')->exists($nomeArquivo);
      $hash = Hash::make($nomeArquivo); // gera a hash
      $hash2 = str_replace("/" , '.' , $hash); // remove as barra      
      $hash3 = substr($hash2, 0, -40); // diminui 30 caracteres 
      $hashFinal = $hash3.$nomeArquivo; // concatena as strings
      //echo($request->dataDebusca);
      //dd($request->all()); 
      Arquivo::create([
        'nome' => $nomeArquivo,
        'nomeXerox' => $request->nomeXerox,
        'hash' => $hashFinal,
        'dataDeBusca' =>$request->dataDeBusca,
        'xeroxes_id' =>$request->xeroxes_id,
        'user_id' =>Auth::user()->id,
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




  }
