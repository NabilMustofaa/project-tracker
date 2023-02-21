@extends('layouts.main')

@section('styles')
<!-- DevExtreme theme -->
<link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/22.2.4/css/dx.light.css">

<!-- DevExtreme library -->
<script type="text/javascript" src="https://cdn3.devexpress.com/jslib/22.2.4/js/dx.all.js"></script>
@endsection


@section('content')

<div class="flex justify-between">
  <h1 class=" text-3xl font-bold"> Draft Project</h1>
  <button href="/draft/create" class=" font-semibold px-4 py-2 border border-gray-200 rounded-md shadow-sm hover:bg-gray-100" id="projectCreate">Create New Draft</button>
</div>


<div id="dataGrid" class="mt-4"></div>

<div id="popup"></div>

@endsection


@section('scripts')
<script src="{{ asset('js/tmp-project/index.js') }}"></script>
@endsection