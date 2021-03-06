<?php
namespace App\Http\Controllers;
use App\Municipality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MunicipalityController extends Controller
{

	public function getMunicipality() {
	$municipality = Municipality::orderBy('created_at','desc')->paginate(10);
	//$posts=Post::orderBy('created_at','desc')->paginate(15);
	return view('municipality',['municipality' => $municipality]);
	}

	public function postMunicipality(Request $request){


		$name = $request['municipality_name'];
		$description = $request['municipality_description'];
		$status = true;

		$municipality = new Municipality();
		$municipality->name = $name;
		$municipality->description = $description;
		$municipality->status = $status;

		$municipality->save();

		return redirect()->route('municipality')->with(['message'=>'Successfully Saved!']);
		
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