<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //protected $fillable = ['title','description'];
    protected $guarded = [];

    public function tasks(){
      return $this->hasMany(Task::Class);
    }

    public function addTask($description){

      return $this->tasks()->create(['description' => $description]);

      // return Task::create([
      //   'project_id' => $this->id,
      //   'description' => $description,
      // ]);
    }

}
