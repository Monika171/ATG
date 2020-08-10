<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
  
  
  public function storeSkill(Request $request) {
     $id = Auth()->user()->id;
     $user = User::find($id);
     $user->skills()->sync($request->skills, false);
     return redirect('userdashboard');
  }




  public function editSkill(Request $request) {
      $id = Auth()->user()->id;
     $user = User::find($id);
     $user->skills()->sync($request->skills);
     return redirect('userdashboard');
    
  }
}
