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
		<div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#global-settings" aria-controls="global-settings" role="tab" data-toggle="tab">Global Settings</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade in active" id="global-settings">
                            <br>
                            <div class="row">
                               <div class="col-xs-12 col-md-12">
                                  <form class="form-horizontal" action="{{ route('general-settings') }}" method="post">
                                      <div class="form-group">
                                        <label for="inputSchoolCode" class="col-sm-2 control-label">School Code</label>
                                        <div class="col-sm-10">
                                          <input type="hidden" name="id" value="1">
                                          <input type="text" class="form-control" id="inputSchoolCode" name="school_code" placeholder="Code" value="{{ $site_code }}">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputSiteTitle" class="col-sm-2 control-label">Site Title</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputSiteTitle" required title="Site Title must not be empty" name="school_title" placeholder="Title" value="{{ $site_title }}">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputOwner" class="col-sm-2 control-label">Owner</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputOwner" title="Owner must not be empty" required  name="owner" placeholder="Owner" value="{{ $owner }}">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputStreet" class="col-sm-2 control-label">Street</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputStreet" required title="Street must not be empty" placeholder="Street" name="street" value="{{ $street }}">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputStreet" class="col-sm-2 control-label">Barangay</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputStreet" required title="Barangay must not be empty" placeholder="Barangay" name="barangay" value="{{ $barangay }}">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputCity" class="col-sm-2 control-label">City/Municipality</label>
                                        <div class="col-sm-10">
                                          <select class="form-control" id="inputCity" required title="City must not be empty"placeholder="City / Municipality" name="municipality">
                                             @foreach ($populatemunicipality   as $populatemunicipalities)
                                            <option value='{{ $populatemunicipalities->id }}'>{{ $populatemunicipalities->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputRegion" class="col-sm-2 control-label">Region</label>
                                        <div class="col-sm-10">
                                          <select class="form-control" id="inputRegion" required title="Region must not be empty" placeholder="Region" name="region">
                                            @foreach ($populateregion as $populateregions)
                                            <option value='{{ $populateregions->id }}'>{{ $populateregions->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputCountry" class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10">
                                          <select class="form-control" id="inputCountry" required title="Country must not be empty" placeholder="Country" name="country">
                                            @foreach ($populatecountry as $populatecountries)
                                            <option value='{{ $populatecountries->id }}'>{{ $populatecountries->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputZip" class="col-sm-2 control-label">Zip Code</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="form-control" id="inputZip" name="zip_code" placeholder="Zip Code" required title="Zip Code must not be empty" value="{{ $zip_code }}">
                                        </div>
                                        <label for="inputContact" class="col-sm-2 control-label">Contact</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="form-control" id="inputContact" name="contact" placeholder="Contact Number" required title="Contact Number must not be empty" value="{{ $contact }}">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputFax" class="col-sm-2 control-label">Fax</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="form-control" id="inputFax" name="fax" placeholder="Fax" required title="Fax must not be empty" value="{{ $fax }}">
                                        </div>
                                        <label for="inputTin" class="col-sm-2 control-label">Tin</label>
                                        <div class="col-sm-3">
                                          <input type="text" class="form-control" id="inputTin" name="tin" placeholder="Tin Number" required title="Tin Number must not be empty" value="{{ $tin }}">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputSchoolLevel" class="col-sm-2 control-label">School Level</label>
                                        <div class="col-sm-3">
                                          <select class="form-control" id="inputSchoolLevel" placeholder="School Level" required title="School Level must not be empty" name="school_level">
                                            @foreach ($populateschool_level as $populateschool_levels)
                                            <option value='{{ $populateschool_levels->id }}'>{{ $populateschool_levels->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                        <label for="inputSchoolType" class="col-sm-2 control-label">School Type</label>
                                        <div class="col-sm-3">
                                          <select class="form-control" id="inputSchoolType" name="school_type" required title="School Type must not be empty">
                                            @foreach ($populateschool_type as $populateschool_types)
                                            <option value='{{ $populateschool_types->id }}'>{{ $populateschool_types->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputAcademicYear" class="col-sm-2 control-label">Academic Year</label>
                                        <div class="col-sm-3">
                                          <select class="form-control" id="inputAcademicYear" placeholder="Academic Year" title="Academic Year must not be empty" name="academic_year">
                                            @foreach ($populateacademic_year as $populateacademic_years)
                                            <option value='{{ $populateacademic_years->id }}'>{{ $populateacademic_years->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <label for="inputTemplate" class="col-sm-2 control-label">Template Color</label>
                                        <div class="col-sm-3">
                                          <select class="form-control" id="inputTemplate" placeholder="Template" title="Template must not be empty" name="template_id">
                                            @foreach ($populatetemplate as $populatetemplates)
                                            <option value='{{ $populatetemplates->id }}'>{{ $populatetemplates->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputActivatedModules" class="col-sm-2 control-label">Activated Modules</label>
                                        <div class="col-sm-10">
                                          <select class="form-control" name="activated_modules[]" id="inputActivatedModules" multiple />
                                            <option selected value="1">News Board</option>
                                            <option value="2">Events</option>
                                            <option value="3">Vacation</option>
                                            <option value="4">Attendance</option>
                                            <option value="5">Staff Attendance</option>
                                            <option value="6">Books Library</option>
                                            <option value="7">Assignments</option>
                                            <option value="8">Online Exams</option>
                                            <option value="9">Media</option>
                                            <option selected value="10">Reports</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <input type="submit" value="Edit Settings" name="submit" class="btn btn-default">
                                          <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        </div>
                                      </div>
                                    </form>
                               </div> 
                            </div>
                            
                          </div>
                          

                      </div>  
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