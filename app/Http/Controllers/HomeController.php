<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimonio;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('inside.home');
    }

    public function videosUpdate()
    {
        $user = User::find(Auth::user()->id);
 
        $user->videos_vistos++;
         
        $user->save();
        return redirect('/home');
    }

    public function usersActivesOrInactives($estado)
    {
        $users = User::where('usuario_id',Auth::user()->id)->where('activo', $estado)->get();
        $titulo = $estado == 0 ? "Usuario Inactivos":"Usuarios Activos";
        return view('inside.users', ['users'=>$users, 'titulo'=>$titulo]);
    }

    public function activarUsuario($id)
    {
        $user = User::find($id);
 
        $user->activo = 1;
         
        $user->save();
        return redirect('/home');
    }

    public function getTestimonios($mensaje = '')
    {
        $testimonios = Testimonio::leftJoin('users', 'users.id', '=', 'testimonios.usuario_id')->orderByDesc('testimonios.id')->get();
        
        return view('inside.testimonios', ['testimonios'=>$testimonios, 'mensaje'=> $mensaje]);
    }

    public function addTestimonios(Request $request)
    {
        $testimonio = new Testimonio();
        $testimonio->descripcion = $request->descripcion;
        $testimonio->satisfacion = $request->satisfacion;
        $testimonio->usuario_id = Auth::user()->id;
        $testimonio->save();
        return redirect('/testimonios');
    }
}
