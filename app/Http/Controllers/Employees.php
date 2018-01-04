<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Employees extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Employee::all();
    }
    
    /**
     * @param Employee $employee
     * @return Employee
     */
    public function show(Employee $employee)
    {
        return $employee;
    }

    /**
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
 
        return response()->json($product, 201);
    }

    /**
     * @param Request $request
     * @param \App\Http\Controllers\Product $product
     * @return string
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
 
        return response()->json($product, 200);
    }

    /**
     * @param \App\Http\Controllers\Product $product
     * @return string
     */
    public function delete(Product $product)
    {
        $product->delete();
 
        return response()->json(null, 204);
    }
} 