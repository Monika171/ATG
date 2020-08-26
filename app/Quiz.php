<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Quiz;

class Quiz extends Model
{
    protected $fillable = [ 'name','description','minutes' ];


    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function storeQuiz($data){
        return Quiz::create($data);
    }

    public function allQuiz(){
        return Quiz::all();
    }
}
