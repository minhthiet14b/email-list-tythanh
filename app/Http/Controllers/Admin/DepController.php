<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Dep;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\DepRequest;
class DepController extends Controller
{
    public function index(){
        $deps = Dep::paginate(10);
        return view('admin.dep.index')->with('deps' , $deps);
    }
    public function create(){
        return view('admin.dep.add');
    }
    public function store(DepRequest $depRequest){
        $data = ([
            'name' => $depRequest->name,
            'publish' => $depRequest->publish
        ]);
        Dep::create($data);
        if($depRequest->close){
            return redirect()->route('deps.index');
        }
        if($depRequest->back){
            return redirect()->route('deps.create');
        }
    }
    public function edit($id){
        $dep = Dep::find($id);
        return view('admin.dep.edit')->with('dep',$dep);
    }
    public function update(Request $request,$id){
            $data = ([
                'name' => $request->name,
                'publish' => $request->publish
            ]);
            Dep::find($id)->update($data);
            if($request->ok){
                return redirect()->route('deps.index');
            }
    }
    public function delete($id){
        try{
            Dep::find($id)->delete();
            return response()->json([
                'code' => 200,
                'messager' => 'success'
            ],200);
        }catch(\Exception $exception){
            Log::error('Messenger: '.$exception->getMessage().'Line: '. $exception->getFile());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
}


