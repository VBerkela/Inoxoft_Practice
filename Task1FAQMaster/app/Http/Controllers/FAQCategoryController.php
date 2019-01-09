<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FAQCategoryController extends Controller
{
    public function index()
    {
        return view('FAQCategory');
    }
    function insertCat(Request $req){
        $CategoryTitle = $req -> input('CategoryTitle');
        $CategoryDescription = $req -> input('CategoryDescription');
        $data = array('CategoryTitle'=>$CategoryTitle, 'CategoryDescription'=>$CategoryDescription );

        DB::table('faqsCategory')->insert($data);
        return redirect('/category');
        echo "Yep!";
    }
    function getData(){
        $data['data']=DB::table('faqsCategory')->get();
        if(count($data)>0){
            return view('FAQCategory', $data);
        }
        else{
            return view('FAQCategory');
        }
    }
    function deleteCat($id){
        DB::table('faqsCategory')->where('FaqID', $id)->delete();
        return redirect('/category');
    }
    function update($id){

    }
}
