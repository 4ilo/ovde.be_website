<?php

namespace App\Http\Controllers;

use App\Solution;
use App\Tag;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $solutions = Solution::all();
        
        if($request->has("sort") && $request->sort != 0)
        {
            $solutions = Solution::getByTag($request->sort)->get();
        }
        
        $tags = Tag::all();
        
        return view("admin.solution.list",compact("solutions","tags"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view("admin.solution.create", compact("tags"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "titel" => "required",
            "body" => "required",
            "tag_id" => "required|exists:tags,id"
        ]);
        
        $solution = Solution::create($request->only(["titel","body","tag_id"]));
        
        return redirect("solution/" . $solution->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        return view("admin.solution.show",compact("solution"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        return view("admin.solution.edit", compact("solution"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        $this->validate($request, [
            "titel" => "required",
            "body" => "required",
        ]);
        
        $solution->update($request->only(["titel", "body"]));
    
        return redirect("solution/" . $solution->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
    
    }
}
