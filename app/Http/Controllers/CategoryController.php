<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Requests;

class CategoryController extends Controller
{
    protected $fields = [
        'cname' => '',
        'title' => '',
        'father_id' => 0,
        'is_active' => 1,
    ];

    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =  Category::orderby('father_id','asc')->get();
        $topCategories = Category::where('father_id',0)->select('id','title')->get();
        $fatherArray = [0=>'顶级分类'];
        foreach ($topCategories as $t){
            $fatherArray[$t->id] = $t->title;
        }
        return view('admin.category.index',compact('categories','fatherArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }
        $topCategories = Category::where('father_id',0)->get();
        $data['topCategories'] = $topCategories;

        return view('admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $category = new Category();
        foreach (array_keys($this->fields) as $field) {
            $category->$field = $request->get($field);
        }
        $category->save();

        return redirect('/admin/category')
            ->withSuccess("The category '$category->title' was created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $data = ['id' => $id];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $category->$field);
        }
        $topCategories = Category::where('father_id',0)->get();
        $data['topCategories'] = $topCategories;

        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::findOrFail($id);

        //foreach (array_keys(array_except($this->fields, ['tag'])) as $field) {
        foreach (array_keys($this->fields) as $field) {
            $category->$field = $request->get($field);
        }
        $category->save();

        return redirect("/admin/category/$id/edit")
            ->withSuccess("Changes saved.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/admin/category')
            ->withSuccess("The '$category->title' tag has been deleted.");
    }
}
