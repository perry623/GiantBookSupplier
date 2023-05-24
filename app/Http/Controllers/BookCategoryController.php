<?php

namespace App\Http\Controllers;

use App\Models\bookCategory;
use App\Http\Requests\StorebookCategoryRequest;
use App\Http\Requests\UpdatebookCategoryRequest;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebookCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebookCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function show(bookCategory $bookCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(bookCategory $bookCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebookCategoryRequest  $request
     * @param  \App\Models\bookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebookCategoryRequest $request, bookCategory $bookCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(bookCategory $bookCategory)
    {
        //
    }
}
