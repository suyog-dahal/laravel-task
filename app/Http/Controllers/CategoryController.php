<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Excel;

class CategoryController extends Controller
{
    //annotation
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create(){
        dd('here');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        $data = $request->all();
        Category::create($data);
        return redirect('/category')->with('status', $data['name'].' registered successfully');
    }

    public function validation($request)
    {
        return $this->validate($request, [
            'name' => 'required|string|max:255',
            'contact' => 'required|numeric',
            'email' => 'required|string|email',
            'gender' => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validation($request);
        $category = Category::findOrFail($request->category_id);
        $category->update($request->all()); //argument passed must be of type array 
        return redirect('/listing')->with('status', $category['name'].' Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $category = Category::findOrFail($request->category_id);
        $category->delete();
        return redirect('/listing')->with('status', $category['name'].' Deleted successfully');

    }

    public function list()
    {

        $categories = Category::all();
        return view('user.list', compact('categories'));
    }

    /*Export To Excel*/
    public function excel()
    {
        $categories = Category::get()->toArray();
        return Excel::create('category data', function($excel) use ($categories) {
            $excel->sheet('category data', function($sheet) use ($categories){
             $sheet->fromArray($categories); 
         });
        })->download('xlsx');
    }
}
