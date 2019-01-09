<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\FAQMenu;

class FAQMenuController extends Controller
{
    public function index()
    {
        return view('FAQMenu');
    }
    function insert(Request $req){
        $title = $req -> input('title');
        $question = $req -> input('question');
        $answer = $req -> input('answer');
        $status = $req -> input('status');
        $category = $req -> input('category');

        $data = array('title'=>$title, 'question'=>$question, 'answer'=>$answer, 'status'=>$status, 'category'=>$category);

        DB::table('faqs')->insert($data);
        return redirect('/menu');
        //echo "Yep!";
    }
    function getData(){
        $data['data']=DB::table('faqs')->get();
        $categories['categories'] =DB::table('faqsCategory')->get();
        if(count($data)>0){
            return view('FAQMenu', $data, $categories);
        }
        else{
            return view('FAQMenu');
        }
    }
    function delete($id){
        DB::table('faqs')->where('FaqID', $id)->delete();
        return redirect('/menu');
    }
    function edit($id){
        $data =FAQMenu::find($id);
        return view('edit', compact('data'));
    }
    function update(Request $req, $id){
        $data = FAQMenu::find($id);
        if(!is_null($req->input('title')))
            $data-> Title = $req->input('title');

        if(!is_null($req->input('question')))
            $data-> Question = $req->input('question');

        if(!is_null($req->input('answer')))
            $data-> Answer = $req->input('answer');

        if(!is_null($req->input('status')))
            $data-> Status = $req->input('status');

        if(!is_null($req->input('category')))
            $data-> Category = $req->input('category');



        return view('edit', compact('data'));
    }
}
