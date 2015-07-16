<ul id="on-menu-princiapal">
	<li><a href="{{ url ('/dashboard/user')}}" class="{{ $user or '' }}">User</a></li>
	<li><a href="{{ url ('/dashboard/company')}}" class="{{ $company or '' }}">Company</a></li>
	<li><a href="{{ url ('/dashboard/application')}}" class="{{ $application or '' }}">Application</a></li>
	<li><a href="{{ url ('/dashboard/notification')}}" class="{{ $notification or '' }}">Notification</a></li>
	<li><a href="{{ url ('/dashboard/report')}}" class="{{ $report or '' }}">Report</a></li>
</ul>