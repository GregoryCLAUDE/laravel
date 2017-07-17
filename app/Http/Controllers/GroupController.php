<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class groupController extends Controller
{
    public function welcome (){
      return view("groups/create_group");
    }

    public function getallGroups(){
      $groups = Group::all();
      return view ("groups/groups", ["groups" => $groups]);
    }

    public function getGroup($id){
      $group = Group::where ("id",$id)->get();
      return view("groups/group_detail", ["group" => $group]);
    }

    public function addGroup(Request $request){

      $group = new Group;

      $group->name = $request->name;

      $group->save();
      return redirect("/groups");
    }
}
