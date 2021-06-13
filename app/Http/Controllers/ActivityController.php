<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){
        $result = activity::all();
        $data =[
            'item' => $result
        ];
        return view('activity.index', $data);
}
public function create($name){
 $activity = new Activity();
 $activity->name = $name;
 $activity->save();
    return redirect('/กิจกรรม');
}
public function delete($id){
    $activity = Activity::find($id);
    $activity->delete();
    return redirect('/กิจกรรม');
}
}
