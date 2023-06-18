<div class="sidebar-header">
	<div class="d-flex justify-content-between">
		<div class="logo">
			<a href="{{ route('dashboard') }}">{{ config('app.name') }}</a>
		</div>
		<div class="toggler">
			<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
		</div>
	</div>
</div>
<div class="sidebar-menu">
	<ul class="menu">
		<li class="sidebar-item {{ request()->is('dashboard*') ? 'active' : '' }}">
			<a href="{{ route('dashboard') }}" class='sidebar-link'>
				<i class="bi bi-grid-fill", style="color:#fff"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<li class="sidebar-item {{ request()->routeIs('students.*') ? 'active' : '' }}">
			<a href="{{ route('students.index') }}" class='sidebar-link'>
				<i class="bi bi-people-fill", style="color:#fff"></i>
				<span>Pelajar</span>
			</a>
		</li>

		<li class="sidebar-item {{ request()->routeIs('school-classes.*') ? 'active' : '' }}">
			<a href="{{ route('school-classes.index') }}" class='sidebar-link'>
				<i class="bi bi-bookmark-fill", style="color:#fff"></i>
				<span>Kelas</span>
			</a>
		</li>

		<li class="sidebar-item {{ request()->routeIs('school-majors.*') ? 'active' : '' }}">
			<a href="{{ route('school-majors.index') }}" class='sidebar-link'>
				<i class="bi bi-briefcase-fill", style="color:#fff"></i>
				<span>Jurusan</span>
			</a>
		</li>

		<li class="sidebar-item has-sub {{ request()->routeIs('cash-transactions.*') ? 'active' : '' }}">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-cash-stack", style="color:#fff"></i>
				<span>Kas</span>
			</a>
			<ul class="submenu {{ request()->routeIs('cash-transactions.*') ? 'active' : '' }}">
				<li class="submenu-item {{ request()->routeIs('cash-transactions.index') ? 'active' : '' }}">
					<a href="{{ route('cash-transactions.index') }}", style="color:#fff;">Kas Minggu Ini</a>
				</li>
				<li class="submenu-item {{ request()->routeIs('cash-transactions.filter') ? 'active' : '' }}">
					<a href="{{ route('cash-transactions.filter') }}", style="color:#fff;">Filter Kas</a>
				</li>
			</ul>
		</li>

		<li class="sidebar-item {{ request()->is('report*') ? 'active' : '' }}">
			<a href="{{ route('report.index') }}" class='sidebar-link'>
				<i class="bi bi-file-earmark-spreadsheet-fill", style="color:#fff"></i>
				<span>Laporan</span>
			</a>
		</li>

		<li class="sidebar-item {{ request()->routeIs('administrators.*') ? 'active' : '' }}">
			<a href="{{ route('administrators.index') }}" class='sidebar-link'>
				<i class="bi bi-person-badge-fill", style="color:#fff"></i>
				<span>Administrator</span>
			</a>
		</li>

		<li class="sidebar-item">
			<form method="POST" action="{{ route('logout') }}" id="logout">
				@csrf

				<a href="{{ route('logout') }}" class='sidebar-link'>
					<i class="bi bi-box-arrow-left", style="color:#fff"></i>
					<span>Logout</span>
				</a>
			</form>
		</li>

	</ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
