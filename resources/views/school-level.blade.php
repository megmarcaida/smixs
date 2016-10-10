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
	                   	<div class="col-md-9">
	
                      
                         <div class="row">

                              <div class="panel panel-default">

                                <div class="panel-heading">School Level</div>

                                  <div class="panel-body">
                                         
                                      <div class="col-xs-12 col-md-12">

                                          <form class="form-horizontal" action="{{ route('school_level') }}" method="post">

                                              <div class="form-group {{ $errors->has('school_level_name') ? 'has-error' : '' }}">
                                                <label for="inputSchoolLevelName" class="col-sm-3 control-label">School Level Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="inputSchoolLevelName" name="school_level_name" placeholder="School Level Name">
                                                </div>
                                              </div>

                                              <div class="form-group {{ $errors->has('school_level_description') ? 'has-error' : '' }}">
                                                <label for="inputSchoolLevelDescription" class="col-sm-3 control-label">School Level Description</label>
                                                <div class="col-sm-9">
                                                   <input type="text" class="form-control" id="inputSchoolLevelDescription" required title="Description must not be empty" name="school_level_description" placeholder="School Level Description">
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <input type="submit" value="Save" name="submit" class="btn btn-primary">
                                                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                </div>
                                              </div>

                                          </form>

                                           @if (count($school_level) > 0)
                                              
                                                 

                                                      <table class="table table-hover table-condensed">

                                                          <!-- Table Headings -->
                                                          <thead>
                                                              <th>Name</th>
                                                              <th>Description</th>
                                                              <th>&nbsp;&nbsp;</th>
                                                          </thead>

                                                          <!-- Table Body -->
                                                          <tbody>
                                                              @foreach ($school_level as $school_levels)
                                                                  <tr>
                                                                      <td>{{ $school_levels->name }}</td>
                                                                      <td >{{ $school_levels->description }}</td>
                                                                      <td class="text-right">
                                                                        <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                                                        <input type="submit" value="Delete" name="submit" class="btn btn-danger">
                                                                      </td>
                                                                  </tr>
                                                              @endforeach
                                                          </tbody>
                                                      </table>
                                                  
                                              
                                                  {{ $school_level->links() }}
                                          @endif

                                      </div>

                                  </div> 

                            </div>


                      </div>  
	</section>
	
		
	</div>

	
	<script type="text/javascript">
		var token = '{{ Session::token() }}';
		var url = '{{ route('edit') }}';
		var urlLike = '{{ route('like') }}';
	</script>
@endsection