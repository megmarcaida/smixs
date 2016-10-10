<ol>
@if (Storage::disk('local')->has(Auth::user()->id . '.jpg'))
        <li><a href="{{ route('account') }}"><img src="{{ route('account.image', ['filename' => Auth::user()->id . '.jpg']) }}" alt="" class="img-responsive profile-pic"> {{ Auth::user()->firstname }}</a></li>
        @else
        <li><a href="{{ route('account') }}"><img src="{{ asset('src/img/blank.png') }}" alt="" class="img-responsive profile-pic"> {{ Auth::user()->firstname }}</a></li>
        @endif
<li><a href="{{route('dashboard')}}" title="Dashboard"><span class="glyphicon glyphicon-dashboard profile-pic" aria-hidden="true"></span> Dashboard</a></li>
<li><a href="{{route('dashboard')}}" title="Messages"><span class="glyphicon glyphicon-envelope profile-pic" aria-hidden="true"></span> Messages</a></li>
<li><a href="{{route('dashboard')}}" title="Classes and Schedules"><span class="glyphicon glyphicon-list-alt profile-pic" aria-hidden="true"></span> Classes and Schedule</a></li>
<li><a href="{{route('dashboard')}}" title="Attendance"><span class="glyphicon glyphicon-user profile-pic" aria-hidden="true"></span> Attendance</a></li>
<hr>
<ul>
	<li><a href="{{route('general-settings')}}" title="General Settings"><span class="glyphicon glyphicon-cog profile-pic" aria-hidden="true"></span>General Settings</a></li>
	<li><a href="#" id="toggle" title="Other Files"><span class="glyphicon glyphicon-folder-open profile-pic" aria-hidden="true"></span> Other Files</a></li>
	<div class="toggle hide-item">
		<li><a href="{{route('country')}}" title="Country"><span class="glyphicon  glyphicon glyphicon-menu-right profile-pic" aria-hidden="true"></span>Country</a></li>
		<li><a href="{{route('municipality')}}" title="Municipality"><span class="glyphicon  glyphicon glyphicon-menu-right profile-pic" aria-hidden="true"></span>Municipality</a></li>
		<li><a href="{{route('region')}}" title="Region"><span class="glyphicon  glyphicon glyphicon-menu-right profile-pic" aria-hidden="true"></span>Region</a></li>
		<li><a href="{{route('school-level')}}" title="School Level"><span class="glyphicon  glyphicon glyphicon-menu-right profile-pic" aria-hidden="true"></span>
		School Level</a></li>
		<li><a href="{{route('school-type')}}" title="School Type"><span class="glyphicon  glyphicon glyphicon-menu-right profile-pic" aria-hidden="true"></span>
		School Type</a></li>
		<li><a href="{{route('academic-year')}}" title="Academic Year"><span class="glyphicon  glyphicon glyphicon-menu-right profile-pic" aria-hidden="true"></span>
		Academic Year</a></li>
	</div>
</ul>
</ol>

		