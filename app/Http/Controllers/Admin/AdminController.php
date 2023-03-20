<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Academic;
use App\Models\Admission;
use App\Models\Campus;
use App\Models\Health;
use App\Models\News;
use App\Models\Podcast;
use App\Models\Slider;
use App\Models\Stories;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getSliders()
    {
        $data = Slider::all();
        return view('admin.sliders.index', compact('data'));
    }

    public function editSliders($id)
    {
        $data = Slider::findorfail($id);
        return view('admin.sliders.edit', compact('data'));
    }

    public function Createsliders()
    {
        return view('admin.sliders.create');
    }

    public function updatedSliders(Request $request)
    {
        $data = Slider::findorfail($request->id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $image_1   = time() . $file->getClientOriginalname();
            $file->move('upload/Slider', $image_1);
            $data->image               = $image_1;
        }
        if ($request->hasfile('image_2')) {
            $file = $request->image_2;
            $image_1   = time() . $file->getClientOriginalname();
            $file->move('upload/Slider', $image_1);
            $data->image_2               = $image_1;
        }

        $data->name = $request->name;
        $data->notes = $request->notes;
        $data->save();

        return redirect()->back()->with('message', 'Slider Edit Successfully');
    }

    public function SaveedSliders(Request $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/Slider', $filename);
        }

        if ($request->hasfile('image_2')) {
            $file = $request->image_2;
            $filename_1  = time() . $file->getClientOriginalname();
            $file->move('upload/Slider', $filename_1);
        }


        Slider::create([
            'name' => $request->name,
            'notes' => $request->notes,
            'image' => $filename,
            'image_2' => $filename_1,
        ]);
        return redirect()->back()->with('message', 'Slider Saved Successfully');
    }

    public function deletedSliders($id)
    {
        Slider::destroy($id);
        return redirect()->route('getSliders')->with('message', 'Slider Deleted Successfully');
    }

    ########################################### Academics ################################################################



    public function getAcademics()
    {
        $data = Academic::all();
        return view('admin.getAcademics.index', compact('data'));
    }

    public function editAcademics($id)
    {
        $data = Academic::findorfail($id);
        return view('admin.getAcademics.edit', compact('data'));
    }

    public function CreateAcademics()
    {
        return view('admin.getAcademics.create');
    }

    public function updatedAcademics(Request $request)
    {
        $data = Academic::findorfail($request->id);

        $data->name = $request->name;
        $data->notes = $request->notes;
        $data->save();

        return redirect()->back()->with('message', 'Academic Edit Successfully');
    }

    public function SaveedAcademics(Request $request)
    {

        Academic::create([
            'name' => $request->name,
            'notes' => $request->notes,

        ]);
        return redirect()->back()->with('message', 'Academic Saved Successfully');
    }

    public function deletedAcademics($id)
    {
        Academic::destroy($id);
        return redirect()->route('getAcademics')->with('message', 'Academic Deleted Successfully');
    }



    ########################################### Abouts ################################################################



    public function getaboutsus()
    {
        $data = About::all();
        return view('admin.getaboutsus.index', compact('data'));
    }

    public function editaboutsus($id)
    {
        $data = About::findorfail($id);
        return view('admin.getaboutsus.edit', compact('data'));
    }

    public function Createaboutsus()
    {
        return view('admin.getaboutsus.create');
    }

    public function updatedaboutsus(Request $request)
    {
        $data = About::findorfail($request->id);

        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/about', $filename);

            $data->image = $filename;
        }

      
        $data->name = $request->name;
        $data->notes = $request->notes;
        $data->futhre_1 = $request->futhre_1;
        $data->futhre_2 = $request->futhre_2;
        $data->futhre_3 = $request->futhre_3;
        $data->futhre_4 = $request->futhre_4;
        $data->futhre_5 = $request->futhre_5;
        $data->futhre_6 = $request->futhre_6;
        $data->futhre_7 = $request->futhre_7;
        $data->futhre_8 = $request->futhre_8;
        $data->number_title_1 = $request->number_title_1;
        $data->number_1 = $request->number_1;
        $data->number_title_2 = $request->number_title_2;
        $data->number_2 = $request->number_2;
        $data->number_3 = $request->number_3;
        $data->number_title_3 = $request->number_title_3;
        $data->save();

        return redirect()->back()->with('message', 'About Edit Successfully');
    }

    public function Saveedaboutsus(Request $request)
    {


        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/about', $filename);
        }

        About::create([
            'image' => $filename,
            'name' => $request->name,
            'notes' => $request->notes,
            'futhre_1' => $request->futhre_1,
            'futhre_2' => $request->futhre_2,
            'futhre_3' => $request->futhre_3,
            'futhre_4' => $request->futhre_4,
            'futhre_5' => $request->futhre_5,
            'futhre_6' => $request->futhre_6,
            'futhre_7' => $request->futhre_7,
            'futhre_8' => $request->futhre_8,
            'number_title_1' => $request->number_title_1,
            'number_1' => $request->number_1,
            'number_title_2' => $request->number_title_2,
            'number_2' => $request->number_2,
            'number_3' => $request->number_3,
            'number_title_3' => $request->number_title_3,

        ]);
        return redirect()->back()->with('message', 'About Saved Successfully');
    }

    public function deletedaboutsus($id)
    {
        About::destroy($id);
        return redirect()->route('getaboutsus')->with('message', 'About Deleted Successfully');
    }

    #########################################################################################

    public function getcampus()
    {
        $data = Campus::all();
        return view('admin.campus.index', compact('data'));
    }

    public function editcampus($id)
    {
        $data = Campus::findorfail($id);
        return view('admin.campus.edit', compact('data'));
    }

    public function Createcampus()
    {
        return view('admin.campus.create');
    }

    public function updatedcampus(Request $request)
    {
        $data = Campus::findorfail($request->id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $image_1   = time() . $file->getClientOriginalname();
            $file->move('upload/campus', $image_1);
            $data->image               = $image_1;
        }
      
        $data->name = $request->name;
        $data->notes = $request->notes;
        $data->save();

        return redirect()->back()->with('message', 'Campus Edit Successfully');
    }

    public function Saveedcampus(Request $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/campus', $filename);
        }

       


        Campus::create([
            'name' => $request->name,
            'notes' => $request->notes,
            'image' => $filename,
           
        ]);
        return redirect()->back()->with('message', 'Campus Saved Successfully');
    }

    public function deletedcampus($id)
    {
        Campus::destroy($id);
        return redirect()->route('getcampus')->with('message', 'Campus Deleted Successfully');
    }

###########################################################################################
      public function getadmissions()
    {
        $data = Admission::all();
        return view('admin.admissions.index', compact('data'));
    }

    public function editadmissions($id)
    {
        $data = Admission::findorfail($id);
        return view('admin.admissions.edit', compact('data'));
    }

    public function Createadmissions()
    {
        return view('admin.admissions.create');
    }

    public function updatedadmissions(Request $request)
    {
        $data = Admission::findorfail($request->id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $image_1   = time() . $file->getClientOriginalname();
            $file->move('upload/admissions', $image_1);
            $data->image               = $image_1;
        }
      
        $data->notes_1 = $request->notes_1;
        $data->notes_2 = $request->notes_2;
        $data->url = $request->url;
        $data->save();

        return redirect()->back()->with('message', 'admissions Edit Successfully');
    }

    public function Saveedadmissions(Request $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/admissions', $filename);
        }

       


        Admission::create([
            'notes_1' => $request->notes_1,
            'notes_2' => $request->notes_2,
            'url' => $request->url,
            'image' => $filename,
           
        ]);
        return redirect()->back()->with('message', 'admissions Saved Successfully');
    }

    public function deletedadmissions($id)
    {
        Admission::destroy($id);
        return redirect()->route('getadmissions')->with('message', 'admissions Deleted Successfully');
    }

    #########################################################################################



    public function gethealths()
    {
        $data = Health::all();
        return view('admin.healths.index', compact('data'));
    }

    public function edithealths($id)
    {
        $data = Health::findorfail($id);
        return view('admin.healths.edit', compact('data'));
    }

    public function Createhealths()
    {
        return view('admin.healths.create');
    }

    public function updatedhealths(Request $request)
    {
        $data = Health::findorfail($request->id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $image_1   = time() . $file->getClientOriginalname();
            $file->move('upload/healths', $image_1);
            $data->image               = $image_1;
        }
      

        $data->name = $request->name;
        $data->notes = $request->notes;
        $data->save();

        return redirect()->back()->with('message', 'healths Edit Successfully');
    }

    public function Saveedhealths(Request $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/healths', $filename);
        }

      
        Health::create([
            'name' => $request->name,
            'notes' => $request->notes,
            'image' => $filename,
       
        ]);
        return redirect()->back()->with('message', 'healths Saved Successfully');
    }

    public function deletedhealths($id)
    {
        Health::destroy($id);
        return redirect()->route('gethealths')->with('message', 'healths Deleted Successfully');
    }

    #########################################################################################



    public function getpodcasts()
    {
        $data = Podcast::all();
        return view('admin.podcasts.index', compact('data'));
    }

    public function editpodcasts($id)
    {
        $data = Podcast::findorfail($id);
        return view('admin.podcasts.edit', compact('data'));
    }

    public function Createpodcasts()
    {
        return view('admin.podcasts.create');
    }

    public function updatedpodcasts(Request $request)
    {
        $data = Podcast::findorfail($request->id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $image_1   = time() . $file->getClientOriginalname();
            $file->move('upload/podcasts', $image_1);
            $data->image               = $image_1;
        }
      

        $data->name = $request->name;
        $data->notes = $request->notes;
        $data->url = $request->url;
        $data->save();

        return redirect()->back()->with('message', 'podcasts Edit Successfully');
    }

    public function Saveedpodcasts(Request $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/podcasts', $filename);
        }

      
        Podcast::create([
            'name' => $request->name,
            'notes' => $request->notes,
            'image' => $filename,
            'url' => $request->url,
       
        ]);
        return redirect()->back()->with('message', 'podcasts Saved Successfully');
    }

    public function deletedpodcasts($id)
    {
        Podcast::destroy($id);
        return redirect()->route('getpodcasts')->with('message', 'podcasts Deleted Successfully');
    }

    ##################################################################

    public function getstories()
    {
        $data = Stories::all();
        return view('admin.stories.index', compact('data'));
    }

    public function editstories($id)
    {
        $data = Stories::findorfail($id);
        return view('admin.stories.edit', compact('data'));
    }

    public function Createstories()
    {
        return view('admin.stories.create');
    }

    public function updatedstories(Request $request)
    {
        $data = Stories::findorfail($request->id);
       

        $data->name = $request->name;
        
        $data->url = $request->url;
        $data->save();

        return redirect()->back()->with('message', 'stories Edit Successfully');
    }

    public function Saveedstories(Request $request)
    {
      
      
        Stories::create([
            'name' => $request->name,
         
            'url' => $request->url,
       
        ]);
        return redirect()->back()->with('message', 'stories Saved Successfully');
    }

    public function deletedstories($id)
    {
        Stories::destroy($id);
        return redirect()->route('getstories')->with('message', 'stories Deleted Successfully');
    }
    ##################################################################

    public function getnews()
    {
        $data = News::all();
        return view('admin.news.index', compact('data'));
    }

    public function editnews($id)
    {
        $data = News::findorfail($id);
        return view('admin.news.edit', compact('data'));
    }

    public function Createnews()
    {
        return view('admin.news.create');
    }

    public function updatednews(Request $request)
    {
        $data = News::findorfail($request->id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $image_1   = time() . $file->getClientOriginalname();
            $file->move('upload/news', $image_1);
            $data->image               = $image_1;
        }

        $data->name = $request->name;
        $data->by_name = $request->by_name;
        $data->by_category = $request->by_category;
        $data->notes = $request->notes;
        $data->save();

        return redirect()->back()->with('message', 'news Edit Successfully');
    }

    public function Saveednews(Request $request)
    {


        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/news', $filename);
        }
      
      
        News::create([
            'name' => $request->name,
            'by_name' => $request->by_name,
            'by_category' => $request->by_category,
            'notes' => $request->notes,
            'image' => $filename,
       
        ]);
        return redirect()->back()->with('message', 'news Saved Successfully');
    }

    public function deletednews($id)
    {
        News::destroy($id);
        return redirect()->route('getnews')->with('message', 'news Deleted Successfully');
    }

}
