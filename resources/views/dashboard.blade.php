@extends('layouts.master')

@section('title')
    #Smixs
@endsection

@section('content')
	@include('includes.message-block')
	<section class="row new-post">
		<div class="col-md-3">
			@include('includes.sidebar')
		</div>
		<div class="col-md-6">
			<header><h3>What's happening?</h3></header>
			<form action="{{ route('post.create') }}" method="post">
				<div class="form-group">
					<textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Share something.."></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Post Something</button>
				<input type="hidden" name="_token" value="{{ Session::token() }}">
			</form>
		</div>
	</section>
	
		<section class="row posts">
			<div class="col-md-6 col-md-offset-3">
				<header><h3>See whats going on...</h3></header>
				<div class="scroller">
				@foreach($posts as $post)
				<article class="post  {{ Auth::user() == $post->user ? 'own' : '' }}" data-postid="{{ $post->id }}">
					@if (Storage::disk('local')->has($post->user->id . '.jpg'))
			        <a href="{{ route('account') }}"><img src="{{ route('account.image', ['filename' => $post->user->id . '.jpg']) }}" alt="" class="img-responsive profile-pic"></a>
			        @else
			        <a href="{{ route('account') }}"><img src="{{ asset('src/img/blank.png') }}" alt="" class="img-responsive profile-pic"></a>
			        @endif
					<a href="#">{{ $post->user->firstname}}</a><p>{{ $post->body }}</p>
					<div class="info">
						Posted on {{ $post->created_at }}
					</div>
					<div class="interaction">
						<a href="#" class="like">{{ Auth::user()->likes()->where('post_id',$post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like' }}</a> 
						@if (Auth::user() == $post->user)
							|
							<a class="edit" href="#">Edit</a> |
							<a href="{{ route('post.delete',['post_id' => $post->id]) }}">Delete</a>
						@endif
						<a href=""> {{ count($post->likes->where('post_id',$post->id)) == 0 ? '' : '| ' .count($post->likes->where('post_id',$post->id)) }} </a>
					</div>
				</article>

				@endforeach
				{{ $posts->links() }}
				</div>
			
		</section>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Edit Post</h4>
	      </div>
	      <div class="modal-body">
	        <form>
	        	<div class="form-group">
	        		<label for="post-body">Edit the Post</label>
	        		<textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
	        	</div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<script type="text/javascript">
		var token = '{{ Session::token() }}';
		var url = '{{ route('edit') }}';
		var urlLike = '{{ route('like') }}';
	</script>
@endsection