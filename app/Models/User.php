<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Http\Livewire\Teclados;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PhpParser\Node\Stmt\Return_;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'ci',
        'phone',
        'email',
        'unidad_id',
        'profile',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function rules($id)
    {
        if($id <=0){
            return
            [
                'name' => 'required|min:3|max:50|string|unique:users',
                'ci' => 'required|min:10|max:13|unique:users',
                'email' => 'required|email|unique:users',
                'unidad_id' => 'required|not_in:elegir',
                'profile'=> 'required|not_in:elegir',
                'status'=> 'required|not_in:elegir'
            ];
        }
        else
        {
            return
            [
                'name' => "required|min:3|max:50|string|unique:users,name,{$id}",
                'ci' => "required|min:10|max:13|unique:users,ci,{$id}",
                'email' => "required|email|unique:users,email,{$id}",
                'unidad_id'=> 'required|not_in:elegir',
                'profile'=> 'required|not_in:elegir',
                'status'=> 'required|not_in:elegir'
            ];
        }
    }

    public static $messages =[
        'name.required' => 'nombre requerido',
        'name.unique' => 'nombre ya esta en uso',
        'name.min' => 'nombre debe tener al menos 3 caracteres',
        'name.max' => 'nombre debe tener maximo 50 caracteres',
        'name.string' => 'nombre debe tener solo letras',

        'ci.required' => 'ci-ruc requerido',
        'ci.unique' => 'ci-ruc ya esta registrado en el sistema',
        'ci.min' => 'ci-ruc debe tener al menos 10 caracteres',
        'ci.max' => 'ci-ruc debe tener maximo 13 caracteres',




        'email.required' => 'email es requerido',
        'email.unique' => 'email ya esta en uso',
        'email.email' => 'email es inválido',

        'unidad_id.required' => 'unidad judicial es requerido',
        'unidad_id.not_in' => 'Seleccione una unidad válida',

        'status.required' => 'estado  es requerido',
        'status.not_in' => 'Seleccione un estado  válido',


        'password.required' => 'password requerido',
        'password.min' => 'password debe tener mínimo 3 caracteres',
        'profile.required' => 'perfil es requerido',
        'profile.not_in' => 'Seleccione un perfil válido'
    ];

    //relaciones

    public function image()
    {
        return $this->morphOne(Image::class, 'model')->withDefault();
    }




   // accesores y mutators

   public function getAvatarAttribute()
   {
        $img =  $this->image->file;
        if($img != null )
        {
            if(file_exists('storage/avatars/'. $img))
            return 'storage/avatars' . $img;
            else
            return 'storage/default_avatar.JPG';
        }

        return 'storage/default_avatar.JPG';
   }


   // un usuario pertenece a una unidad

   public function unidad()
   {
    return $this->belongsTo(Unidad::class);
   }

   // tiene monitores
   public function monitores()
   {
     return $this->hasMany(Monitor::class);
   }

   public function teclados()
   {
     return $this->hasMany(Teclado::class);
   }

   public function ratones()
   {
     return $this->hasMany(Raton::class);
   }


   public function telefonos()
   {
     return $this->hasMany(Telefono::class);
   }

   public function scanners()
   {
     return $this->hasMany(Scanner::class);
   }

   public function impresoras()
   {
     return $this->hasMany(Impresora::class);
   }

   public function delegado()
   {
    return $this->belongsTo(Delegado::class);
   }
}
