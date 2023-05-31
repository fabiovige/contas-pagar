<?php

namespace App\Http\Controllers;

use App\Http\Resources\BankAccountResources;
use App\Models\BankAccount;
use App\Http\Requests\StoreBankAccountRequest;
use App\Http\Requests\UpdateBankAccountRequest;

class BankAccountController extends Controller
{
    public function index()
    {
        return BankAccountResources::collection(BankAccount::paginate());
    }

    public function store(StoreBankAccountRequest $request)
    {
        $bankAccount = BankAccount::create($request->all());
        return new BankAccountResources($bankAccount);
    }

    public function show(BankAccount $bankAccount)
    {
        return new BankAccountResources($bankAccount);
    }

    public function update(UpdateBankAccountRequest $request, BankAccount $bankAccount)
    {
        $bankAccount->update($request->all());
        return new BankAccountResources($bankAccount);
    }

    public function destroy(BankAccount $bankAccount)
    {
        $bankAccount->delete();
    }
}
