<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	@include('pengguna.templates._head')

</head>

<body class="stretched">

	<div id="wrapper" class="clearfix">

        @include('pengguna.templates._header')

		@yield('content')

        @include('pengguna.templates._footer')

	</div>


    @include('pengguna.templates._scripts')

</body>

</html>