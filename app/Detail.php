<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
	protected $fillable = ['genero','situacion_sentimental','fecha_nacimiento'];

    protected $with = ['usuario'];
	protected $hidden = ['user_id'];

	public function usuario(){
        return $this->hasOne('App\User', 'id','user_id');
    }
}
