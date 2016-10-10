<?php
namespace App\Http\Controllers;
use App\Settings;
use App\Country;
use App\Municipality;
use App\Region;
use App\School_level;
use App\School_type;
use App\Academic_year;
use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SettingsController extends Controller
{

	

	public function populateDropdowns() {
	$populatecountry = Country::orderBy('created_at','asc')->paginate(100);
	$populatemunicipality = Municipality::orderBy('created_at','asc')->paginate(100);
	$populateregion = Region::orderBy('created_at','asc')->paginate(100);
	$populateschool_level = School_level::orderBy('created_at','asc')->paginate(100);
	$populateschool_type = School_type::orderBy('created_at','asc')->paginate(100);
	$populateacademic_year = Academic_year::orderBy('created_at','asc')->paginate(100);
	$populatetemplate = Template::orderBy('created_at','asc')->paginate(100);
	$site_code = Settings::first()->site_code;
	$site_title = Settings::first()->site_title;
	$owner = Settings::first()->owner;
	$street = Settings::first()->street;
	$barangay = Settings::first()->barangay;
	$zip_code = Settings::first()->zip_code;
	$contact = Settings::first()->contact;
	$fax = Settings::first()->fax;
	$tin = Settings::first()->tin;
	//$posts=Post::orderBy('created_at','desc')->paginate(15);
	//return view('general-settings',['populatecountry' => $populatecountry]);
	return view('general-settings')->with('populatecountry', $populatecountry)->with('populatemunicipality', $populatemunicipality)->with('populateregion', $populateregion)->with('populateschool_level', $populateschool_level)->with('populateschool_type', $populateschool_type)->with('populateacademic_year', $populateacademic_year)->with('populatetemplate', $populatetemplate)->with('site_code', $site_code)->with('site_title', $site_title)->with('owner', $owner)->with('street', $street)->with('barangay', $barangay)->with('zip_code', $zip_code)->with('contact', $contact)->with('fax', $fax)->with('tin', $tin);
	}

	public function getSettings() {
	$site_code = Settings::first()->site_code;
	$site_title = Settings::first()->site_title;
	$owner = Settings::first()->owner;
	$street = Settings::first()->street;
	$barangay = Settings::first()->barangay;
	$zip_code = Settings::first()->zip_code;
	$contact = Settings::first()->contact;
	$fax = Settings::first()->fax;
	$tin = Settings::first()->tin;
	//$posts=Post::orderBy('created_at','desc')->paginate(15);
	//return view('general-settings',['populatecountry' => $populatecountry]);
	return view('welcome')->with('site_code', $site_code)->with('site_title', $site_title)->with('owner', $owner)->with('street', $street)->with('barangay', $barangay)->with('zip_code', $zip_code)->with('contact', $contact)->with('fax', $fax)->with('tin', $tin);
	}

	public function postGeneralSettings(Request $request){

		$settings = Settings::find($request['id']);
		$school_code = $request['school_code'];
		$school_title = $request['school_title'];
		$owner = $request['owner'];
		$street = $request['street'];
		$barangay = $request['barangay'];
		$municipality = $request['municipality'];
		$region = $request['region'];
		$country = $request['country'];
		$zip_code = $request['zip_code'];
		$contact = $request['contact'];
		$fax = $request['fax'];
		$tin = $request['tin'];
		$school_level = $request['school_level'];
		$school_type = $request['school_type'];
		$academic_year = 12;
		$template_id = 12;
		
		$settings->site_code = $school_code;
		$settings->site_title = $school_title;
		$settings->owner = $owner;
		$settings->street = $street;
		$settings->barangay = $barangay;
		$settings->municipality_id = $municipality;
		$settings->region_id = $region;
		$settings->country_id = $country;
		$settings->zip_code = $zip_code;
		$settings->contact = $contact;
		$settings->fax = $fax;
		$settings->tin = $tin;
		$settings->site_level_id = $school_level;
		$settings->site_type_id = $school_type;
		$settings->academic_year = $academic_year;
		$settings->template_id = $template_id;

		$settings->update();

		return redirect()->route('general-settings')->with(['message'=>'Successfully Updated!']);
		
	}
/*
	public function getDeletePost($post_id){
		$post = Post::find($post_id);
		//$post = Post::where('postid','$post_id')->first();//where clause
		if (Auth::user() != $post->user){
			return redirect()->back();
		}
		$post->delete();
		return redirect()->route('dashboard')->with(['message'=>'Successfully Deleted!']);
	
	}

	public function postEditPost(Request $request){
		$this->validate($request, [
			'body' => 'required'
		]);

		$post = Post::find($request['postId']);
		if (Auth::user() != $post->user){
			return redirect()->back();
		}
		$post->body = $request['body'];
		$post->update();
		return response()->json(['new_body' => $post->body],200);

	}

	public function postLikePost(Request $request){
		$post_id = $request['postId'];
		$isLike = $request['isLike'] === 'true';// ? true  : false;
		$update = false;
		$post = Post::find($post_id);
		if (!$post){
			return null;
		}
		$user = Auth::user();
		$like = $user->likes()->where('post_id',$post_id)->first();
		if ($like){
			$alreadyLike = $like->like;
			$update = true;
			if ($alreadyLike == $isLike){
				$like->delete();
				return null;
			}
		} else {
			$like = new Like();
		}
		$like->like = $isLike;
		$like->user_id = $user->id;
		$like->post_id = $post->id;
		if ($update){
			$like->update();
		}else{
			$like->save();
		}
		return null;
	}*/
}