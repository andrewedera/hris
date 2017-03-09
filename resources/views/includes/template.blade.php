@include('includes.header')
@include('includes.top')
@include('includes.sidebar')
    <!-- START CONTENT -->
    <div class="content">
		@yield('content')
		@include('includes.foot')
    </div>
    <!-- END CONTENT -->
@include('includes.footer');