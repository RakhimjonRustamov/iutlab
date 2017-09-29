<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Session;
use Intervention\Image\Facades\Image;
use Storage;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['getProjects']]);
    }

    public function index()
    {
        $projects=Project::orderBy('id', 'desc')->paginate(5);
        return view('admin.dashboard')->withProjects($projects);
    }

    public function getProjects(){
        $projects=Project::all();
        return view('projects.portfolio')->withProjects($projects);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'link'=> 'required|max:100',
            'definition'=>'required|max:200',
            'featured_image'=>'required|mimes:jpg,jpeg,png,svg|max:8192'
        ));

        $project = new Project;
        $project->link=$request->link;
        $project->definition=$request->definition;

        // image upload to website

        if($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/img/work/'. $filename);
            Image::make($image)->resize(800,400)->save($location);
            $project->image=$filename;
        }

        $project->save();

        Session::flash('success', 'The project was successfully saved');
        return redirect()->route('admin.dashboard');
    }
    public function destroy($id)
    {
        $project=Project::find($id);
        Storage::delete($project->image);
        $project->delete();
        Session::flash('success', "The post was successfully deleted");
        return redirect()->route('admin.dashboard');
    }
}
