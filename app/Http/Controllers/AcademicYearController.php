<?php
namespace App\Http\Controllers;
use App\Academic_year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AcademicYearController extends Controller
{
	public function getAcademicYear() {
	$academic_year = Academic_year::orderBy('created_at','desc')->paginate(10);
	//$posts=Post::orderBy('created_at','desc')->paginate(15);
	return view('academic-year',['academic_year' => $academic_year]);
	}

	public function postAcademicYear(Request $request){


		$name = $request['academic_year_name'];
		$description = $request['academic_year_description'];
		$status = true;

		$country = new Academic_year();
		$country->name = $name;
		$country->description = $description;
		$country->status = $status;

		$country->save();

		return redirect()->route('academic-year')->with(['message'=>'Successfully Saved!']);
		
	}
	

	/*public function postCreatePost(Request $request){

		$this->validate($request,[
			'body' => 'required|max:1000'
		]);
		$post = new Post();
		$post->body = $request["body"];
		$message = 'There was an error';
		if($request->user()->posts()->save($post)){
			$message= 'Post Successfully Created!';
		}
		return redirect()->route('dashboard')->with(['message' => $message]);
	}

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