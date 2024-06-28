<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Car;
use App\Models\Marketer;
use App\Models\Owner;
use Illuminate\Support\Facades\PDF;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function showEmployees(){
      // $employee = Employee::all();
           $employee = DB::table('employees')
                     ->join('city','employees.city_id','=','city.id')  
                     ->get(); 
                     $cars = Marketer::with('markeGet')->get(); 
                     return $cars;
               return view('index', compact('employee'));
    }
 
    public function createPDF() {
        $data = Employee::all();
        \view()->share('employee',$data);
        $pdf = \PDF::loadView('index')->setOptions(['data' => $data]); 
        return $pdf->download('pdf_file.pdf');
      }

}