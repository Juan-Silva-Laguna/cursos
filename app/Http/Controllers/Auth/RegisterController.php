<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function indexRegister($codigo)
    {
        $patrocinador = User::where('codigo', $codigo)->first();
        $mensaje = "Hola, Soy ".$patrocinador->name." veo que te animaste a registrarte en la mejor academia de traiding, adelante continua te aseguro que no te arepentiras, si tienes alguna duda sola da click aquí";
        return view('outside.register', ['codigo' => $codigo, 'mensaje' => $mensaje, 'celular' => $patrocinador->celular]);
    }

    public function registrar(Request $request)
    {
        $patrocinador = User::where('codigo', $request->codigo)->first();
        $codigo = $this->generarCodigo($patrocinador->id);

        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->correo,
            'codigo' => $codigo,
            'password' => Hash::make($request->clave),
            'videos_vistos' => 0,
            'celular' => $request->celular,
            'usuario_id' => $patrocinador->id,
            'activo', 0
        ]);
         
        $user->save();

        $mensaje = "Bienvenido(a) para nosotros es un gusto que hagas parte de la mejor academia!" . $codigo;
        return view('outside.register', ['codigo' => $request->codigo, 'mensaje' => $mensaje, 'celular' => null]);
    }

    private function generarCodigo($id)
    {
        $letras = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N', 'O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $codigo = "";
        for ($i = 0; $i < 7; $i++) {
            if($i == 3){
                $codigo .= $id;
               continue;
            }
            $x = random_int(0, 25);
            $codigo .= $letras[$x];
        }
       return $codigo;
    }
}
