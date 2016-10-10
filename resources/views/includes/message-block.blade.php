@if(count($errors) > 0)
        <div class="row">
            <div class="col-md-4 label label-danger text-center col-md-offset-4">
                <br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach    
                </ul>
            </div>
        </div>
        <br>  
@endif
@if(Session::has('message'))
     <div class="row label-success">
            <div class="col-md-12 label label-success text-center">
                    {{ Session::get('message') }}   
            </div>
    </div> 
@endif