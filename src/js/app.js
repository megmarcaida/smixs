var postId = 0;
var postBodyElement = null;

$('.post').find('.interaction').find('.edit').on('click',function(event){	
	event.preventDefault();

	postBodyElement = event.target.parentNode.parentNode.childNodes[4]; 
	var postBody = postBodyElement.textContent;
	postId = event.target.parentNode.parentNode.dataset['postid'];
	$('#post-body').val(postBody);
	$('#edit-modal').modal();
});


$('#modal-save').on('click',function(){
	$.ajax({
		method:'POST',
		url: url,
		data: { body: $('#post-body').val(), postId: postId, _token: token }
	})
	.done(function(msg) {
		$(postBodyElement).text(msg['new_body']);
		$('#edit-modal').modal('hide');
	});
});


$('.register').on('click',function(event){	
	event.preventDefault();

	$('#register-modal').modal();
});

$('.like').on('click',function(event){
	event.preventDefault();
	postId = event.target.parentNode.parentNode.dataset['postid'];
	var isLike = event.target.previousElementSibling == null;
	$.ajax({
		method: 'POST',
		url: urlLike,
		data: {isLike: isLike, postId: postId, _token: token}
	})
	
		.done(function(){
			event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : 'Like';
	});
});

/*
    $(document).ready(function(){
 
 	var loading_options = {
        finishedMsg: "<div class='end-msg'>End of content!</div>",
        msgText: "<div class='center'>Loading news items...</div>",
        img: "/assets/img/ajax-loader.gif"
     };
        //hides the default paginator
        $('.posts.pagination:visible:first').hide();
 
        //init jscroll and tell it a few key configuration details
        //nextSelector - this will look for the automatically created {{$data->links()}}
        //contentSelector - this is the element wrapper which is cloned and appended with new paginated data
        $('div.scroller').jscroll({
        	loading:loading_options,
            debug: true,
            autoTrigger: true,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.scroller',
            callback: function() {
 
                //again hide the paginator from view
                $('ul.pagination:visible:first').hide();
 
            }
        });
    });

    */

$('#toggle').click(function() {
	    $('.toggle').toggle('fast');
	    return false;
});



	
