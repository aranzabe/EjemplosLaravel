<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {
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
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
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
    protected function create(array $data) {
        /*return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
        ]);
        */
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        /*
         * Tendremos que añadir el Role ‘user’ al usuario creado.
         */
        $user->roles()->attach(Role::where('name', 'user')->first()); //Cogemos el id del rol 'user' de la tabla roles.
        //Si sabemos que el id de los roles usuario es 2 podríamos poner: $user->roles()->attach(2); 
        //Attach es un método que inserta un registro en la tabla pivote (común entre usuarios y roles): roles_user.
        //Existe otro método parecido a attach que es Sync. Su uso es parecido pero admite un array de id de rol.
        //Ejemplo: 
        //Si tenemos esto:
        /*
        user_role

                  id  user_id role_id
                  1    12       1
                  2    12       5
                  3    12       2
        Y usamos este método: $user->roles()->sync(array(1, 2, 3)); //Borraría el registro 5:
                
                  id  user_id role_id
                  2    12       5
        
        Y la tabla quedaría así:
                  id  user_id role_id
                   1    12       1
                   3    12       2
                   4    12       3
        */
        /*
         * Resumiending:
         * The attach function only adds records to the Pivot table.
         * The sync function replaces the current records with the new records. This is very useful for updating a model.
         * Example:
         * Assuming you have a created Post that has many Tags attached on it where the Tags ID's are [1,2,3].
         * And the user has the ability to update the Post and its Tags.
         * The user will send you the new Tags ID's [3,4,5].
         * 
         * If you use the sync function, the new Tags of the Post will be [3,4,5] only.
         * If you use the attach function, the new Tags of the Post will be [1,2,3,4,5].
         */
        return $user;
    }

}
