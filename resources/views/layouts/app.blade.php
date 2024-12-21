<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

		<link rel="shortcut icon" href="{{asset('assets/svgs/logo-mark.svg')}}" type="image/x-icon">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        @vite(['resources/css/app.css'])
	</head>

	<body>
		<!-- Topbar -->
		<livewire:layout.top-bar/>

		<!-- Floating navigation -->
         <livewire:layout.navigation-floating />
		
		<!-- Header -->
        <livewire:layout.header/>

        {{$slot}}

		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

        @vite(['resources/js/app.js'])

	</body>

</html>