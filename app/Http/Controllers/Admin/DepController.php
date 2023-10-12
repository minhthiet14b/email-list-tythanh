<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Dep;

class DepController extends Controller
{
    public function index(){
        $deps = Dep::paginate(10);
        return view('admin.dep.index')->with('deps' , $deps);
    }
    public function create(){
        return view('admin.dep.add');
    }
    public function store(Request $request){
        $data = ([
            'name' => $request->name,
            'publish' => $request->publish
        ]);
        Dep::create($data);
        if($request->close){
            return redirect()->route('deps.index');
        }
        if($request->back){
            return redirect()->route('deps.create');
        }
    }
    public function edit($id){
        $dep = Dep::find($id);
        return view('admin.dep.edit')->with('dep',$dep);
    }
}


