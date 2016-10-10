<?php
namespace App\Http\Controllers;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CountryController extends Controller
{
	public function getCountry() {
	$country = Country::orderBy('created_at','desc')->paginate(10);
	//$posts=Post::orderBy('created_at','desc')->paginate(15);
	return view('country',['country' => $country]);
	}

	public function postCountry(Request $request){


		$name = $request['country_name'];
		$description = $request['country_description'];
		$status = true;

		$country = new Country();
		$country->name = $name;
		$country->description = $description;
		$country->status = $status;

		$country->save();

		return redirect()->route('country')->with(['message'=>'Successfully Saved!']);
		
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