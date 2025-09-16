<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;

class HomeController extends Controller
{
    public function index()
    {
        $totalCompanies = Company::count();
        $totalEmployees = Employee::count();
        $latestCompany = Company::latest()->first();

        $companies = Company::withCount('employees')->get();
        $companyNames = $companies->pluck('name');
        $employeeCounts = $companies->pluck('employees_count');

        return view('home', compact('totalCompanies', 'totalEmployees', 'latestCompany', 'companyNames', 'employeeCounts'));
    }
}