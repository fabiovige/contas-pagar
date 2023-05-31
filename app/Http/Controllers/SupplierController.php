<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Http\Resources\SupplierResources as Resources;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

class SupplierController extends Controller
{
    public function index()
    {
        return Resources::collection(Supplier::paginate());
    }

    public function store(StoreSupplierRequest $request)
    {
        $supplier = Supplier::create($request->all());
        return new Resources($supplier);
    }

    public function show(Supplier $supplier)
    {
        return new Resources($supplier);
    }

    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return new Resources($supplier);
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
    }
}
