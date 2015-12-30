@extends($extend)
@section('content')
	@if($body !== 'auth.admin.login')
	@include('layouts.admin.partials.nav')
	@endif
	@include($body)
@endsection