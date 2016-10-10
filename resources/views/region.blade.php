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

                                <div class="panel-heading">Region</div>

                                  <div class="panel-body">
                                         
                                      <div class="col-xs-12 col-md-12">

                                          
                                          <form class="form-horizontal" action="{{ route('region') }}" method="post">

                                              <div class="form-group {{ $errors->has('region_name') ? 'has-error' : '' }}">
                                                <label for="inputRegionName" class="col-sm-3 control-label">Region Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="inputRegionName" name="region_name" placeholder="Region Name">
                                                </div>
                                              </div>

                                              <div class="form-group {{ $errors->has('region_description') ? 'has-error' : '' }}">
                                                <label for="inputRegionDescription" class="col-sm-3 control-label">Region Description</label>
                                                <div class="col-sm-9">
                                                   <input type="text" class="form-control" id="inputRegionDescription" required title="Description must not be empty" name="region_description" placeholder="Region Description">
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <input type="submit" value="Save" name="submit" class="btn btn-primary">
                                                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                </div>
                                              </div>

                                          </form>

                                           @if (count($region) > 0)
                                              
                                                 

                                                      <table class="table table-hover table-condensed">

                                                          <!-- Table Headings -->
                                                          <thead>
                                                              <th>Name</th>
                                                              <th>Description</th>
                                                              <th>&nbsp;&nbsp;</th>
                                                          </thead>

                                                          <!-- Table Body -->
                                                          <tbody>
                                                              @foreach ($region as $regions)
                                                                  <tr>
                                                                      <td>{{ $regions->name }}</td>
                                                                      <td >{{ $regions->description }}</td>
                                                                      <td class="text-right">
                                                                        <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                                                        <input type="submit" value="Delete" name="submit" class="btn btn-danger">
                                                                      </td>
                                                                  </tr>
                                                              @endforeach
                                                          </tbody>
                                                      </table>
                                                  
                                              
                                                  {{ $region->links() }}
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