<?php
   
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Note;
use Redirect;
use PDF;
   
class NotesController extends Controller
{
   
    public function index()
    {
        $notes = Note::all();
       return view('notes', compact('notes'));
    }
 
    public function pdf(){
      
     $data['title'] = 'Notes List';
     $data['notes'] =  Note::get();
 
     $pdf = PDF::loadView('notes.list_notes', $data);
   
     return $pdf->download('tuts_notes.pdf');
    }
    
 
}