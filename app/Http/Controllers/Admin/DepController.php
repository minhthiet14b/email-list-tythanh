<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Dep;

class DepController extends Controller
{
    public function index(){
        return view('admin.dep.index');
    }
    public function create(){
        return view('admin.dep.add');
    }

}


