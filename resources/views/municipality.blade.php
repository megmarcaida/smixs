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

                                <div class="panel-heading">Municipalities</div>

                                  <div class="panel-body">
                                         
                                      <div class="col-xs-12 col-md-12">

                                          <form class="form-horizontal" action="{{ route('municipality') }}" method="post">

                                              <div class="form-group {{ $errors->has('municipality_name') ? 'has-error' : '' }}">
                                                <label for="inputMunicipalityName" class="col-sm-3 control-label">Municipality Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="inputMunicipalityName" name="municipality_name" placeholder="Municipality Name">
                                                </div>
                                              </div>

                                              <div class="form-group {{ $errors->has('municipality_description') ? 'has-error' : '' }}">
                                                <label for="inputMunicipalityDescription" class="col-sm-3 control-label">Municipality Description</label>
                                                <div class="col-sm-9">
                                                   <input type="text" class="form-control" id="inputMunicipalityDescription" required title="Description must not be empty" name="municipality_description" placeholder="Municipality Description">
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <input type="submit" value="Save" name="submit" class="btn btn-primary">
                                                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                </div>
                                              </div>

                                          </form>

                                           @if (count($municipality) > 0)
                                              
                                                 

                                                      <table class="table table-hover table-condensed">

                                                          <!-- Table Headings -->
                                                          <thead>
                                                              <th>Name</th>
                                                              <th>Description</th>
                                                              <th>&nbsp;&nbsp;</th>
                                                          </thead>

                                                          <!-- Table Body -->
                                                          <tbody>
                                                              @foreach ($municipality as $municipalities)
                                                                  <tr>
                                                                      <td>{{ $municipalities->name }}</td>
                                                                      <td >{{ $municipalities->description }}</td>
                                                                      <td class="text-right">
                                                                        <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                                                        <input type="submit" value="Delete" name="submit" class="btn btn-danger">
                                                                      </td>
                                                                  </tr>
                                                              @endforeach
                                                          </tbody>
                                                      </table>
                                                  
                                              
                                                  {{ $municipality->links() }}
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