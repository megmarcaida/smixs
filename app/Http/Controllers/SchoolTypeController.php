<?php
namespace App\Http\Controllers;
use App\School_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SchoolTypeController extends Controller
{

	public function getSchoolType() {
	$school_type = School_type::orderBy('created_at','desc')->paginate(10);
	//$posts=Post::orderBy('created_at','desc')->paginate(15);
	return view('school-type',['school_type' => $school_type]);
	}
	

	public function postSchoolType(Request $request){


		$name = $request['school_type_name'];
		$description = $request['school_type_description'];
		$status = true;

		$school_type = new School_type();
		$school_type->name = $name;
		$school_type->description = $description;
		$school_type->status = $status;

		$school_type->save();

		return redirect()->route('general-settings')->with(['message'=>'Successfully Saved!']);
		
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