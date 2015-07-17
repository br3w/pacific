<ul id="on-menu-princiapal">
	<li><a href="{{ url ('/company')}}/{{Auth::user()->company}}/user" class="{{ $user or '' }}">User</a></li>
	<li><a href="{{ url ('/company')}}/{{Auth::user()->company}}/application" class="{{ $application or '' }}">Application</a></li>
	<li><a href="{{ url ('/company')}}/{{Auth::user()->company}}/notification" class="{{ $notification or '' }}">Notification</a></li>
	<li><a href="{{ url ('/company')}}/{{Auth::user()->company}}/report" class="{{ $report or '' }}">Report</a></li>
</ul>