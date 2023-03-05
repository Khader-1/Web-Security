<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCookiesRequest;
use App\Http\Requests\UpdateCookiesRequest;
use App\Models\Cookies;

class CookiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCookiesRequest $request)
    {
        return Cookies::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Cookies $cookies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cookies $cookies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCookiesRequest $request, Cookies $cookies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cookies $cookies)
    {
        //
    }
}
