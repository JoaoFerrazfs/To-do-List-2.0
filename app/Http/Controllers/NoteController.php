<?php

namespace App\Http\Controllers;
use App\Models\Note;
use App\Models\User;
use Illuminate\Contracts\Session\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Command\HistoryCommand;

class NoteController extends Controller
{

   public function index(){

      $user = Auth::user()->_id;
      $name = Auth::user()->name;
      session()->put('user', ['name' => $name]);

      
      $data = Note::where('user','=',$user)->get();
      

      return view('dashboard', ['data' => $data]);

   }
   public function store(Request $request){
      $user = Auth::user();
     

      if ($request->hasFile('image') && $request->file('image')->isValid()) {
         $requestImage = $request->image;

         $extension = $requestImage->extension();

         $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

         $requestImage->move(public_path('img/products'), $imageName);

         $request->image = $imageName;
      };

      $data = [
         'user' => $user->_id,
         'title' => $request->title,
         'initialDate'=> $request->initialDate,
         'finalDate' => $request->finalDate,
         'description' => $request->description,
         'image'=>$request->image,
         'status'=>'Aberto'
      ];

      Note::create($data);
     
       return redirect('/dashboard');
   }

   public function myNote($id){

      $data = Note::find($id)->get();
      

      $notes =[];
      foreach ($data as $note){
         $note = [
            'id'=>$note->_id,
            'user' => $note->user,
            'title'=> $note->title,
            'initialDate' =>$note->initialDate,
            'finalDate' =>$note->finalDate,
            'description' => $note->description,
            'image' => $note->image,
            'status' => $note->status

         ];

        

         return view('client.myNote', ['note' => $note]); 
        

      };
   }

   public function update(Request $request){
        
      
      $data = Note::find($request->id);
      $user = Auth::user()->_id;

      if($request->image == null){
         $data = [
         'user' => $user,
         'title' => $request->title,
         'initialDate'=> $request->initialDate,
         'finalDate' => $request->finalDate,
         'description' => $request->description,
         'image'=>$data->image,
         'status'=>$request->status
      ];
      }else{

         $data = [
            'user' => $user,
            'title' => $request->title,
            'initialDate'=> $request->initialDate,
            'finalDate' => $request->finalDate,
            'description' => $request->description,
            'image'=>$request->image,
            'status'=>$request->status

         ];}
         

         Note::find($request['id'])->update($data);
      
         return redirect('/dashboard');
   }

   public function destroy($id){

      Note::where('_id', $id)->delete();

      return redirect('/dashboard');

   }

   
}
