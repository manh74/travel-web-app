<?php

// namespace App\Http\Controllers;

// use App\Tour;
// use App\TypeTour;
// use Illuminate\Http\Request;
// use Input,File;


// class addTourController extends Controller
// {
//     function admin(){
//         return view('page.admin');
//     }
  
//     function getAdd(){
//         return view('page.addTour');
//     }

//     public function getList(){
//       $tour = Tour::all();
//       $type_tour = TypeTour::all();
//       return view('page.viewTour',compact('tour','type_tour'));
//     }

//     function addTour(Request $request){
//         $tours = new Tour;
//         $tours->title = $request->input('title');
//         $tours->summarize = $request->input('summarize');
//         $tours->content = $request->input('content');
//         $tours->image=$request->file('image');
//         $file_name = $request->file('image')->getClientOriginalName();
//         $tours->image = "images/places/".$file_name;
//         $request->file('image')->move('images/places/',$file_name);
//         $tours->id_type = $request->input('typetour');
//         $tours->price = $request->input('price');
//         $tours->on_sale = $request->input('onsale');
//         $tours->schedule = $request->input('schedule');
//         $tours->save();
//         return $this->getList();
//     }

//     public function editForm($id){
//         $tour = Tour::find($id);
//         return view('page/editTour')->with(compact('tour'));
//     }
    
//     public function editTour(Request $request, $id){
//         $tour = Tour::find($id);
//         $tours->title = $request->input('title');
//         $tours->summarize = $request->input('summarize');
//         $tours->content = $request->input('content');
//         $tours->image=$request->file('image');
//         $file_name = $request->file('image')->getClientOriginalName();
//         $tours->image = "images/places/".$file_name;
//         $request->file('image')->move('images/places/',$file_name);
//         $tours->id_type = $request->input('typetour');
//         $tours->price = $request->input('price');
//         $tours->on_sale = $request->input('onsale');
//         $tours->schedule = $request->input('schedule');
//         $tours->save();
//         return $this->getTour();
//     }

//      public function __construct()
//     {
//         $this->middleware('auth');
//     }
// }
