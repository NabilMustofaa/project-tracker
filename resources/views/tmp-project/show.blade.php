@extends('layouts.main')

@section('styles')



<link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/22.2.4/css/dx-gantt.min.css">
<script src="https://cdn3.devexpress.com/jslib/22.2.4/js/dx-gantt.min.js"></script>
<!-- DevExtreme theme -->
<link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/22.2.4/css/dx.light.css">

<!-- DevExtreme library -->
<script type="text/javascript" src="https://cdn3.devexpress.com/jslib/22.2.4/js/dx.all.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.0.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.25/jspdf.plugin.autotable.min.js"></script>
<style>
  .idle {
    background-color: #22283185 !important;
    border: 1px solid #222831 !important;
  }
  .holiday {
    background-color: #ff9c7280 !important;
    border: 1px solid #FF9D72 !important;
  }

</style>


@endsection



@section('content')


<h1 class=" text-3xl font-bold"> Edit Timeplan</h1>
<div class=" flex justify-between">
  <div>
    <h1 >Project : <span id="projectName">{{ $project->name }}</span></h1>
    <h1 >Saturday : <span id="projectSaturday">{{ $project->saturday == true ? 'Yes' : 'No' }}</span></h1>
    <h1 >File URL : <span id="projectFileURL">{{ $project->file_url }}</span></h1>
    <h1 > Gantt Created : <span id="projectGantt">{{ $project->gantt == true ? 'Yes' : 'No' }}</span></h1>
  </div>
  <div class="p-4">
    <button href="/draft/create" class="font-semibold px-4 py-2 border border-gray-200 rounded-md shadow-sm hover:bg-gray-100" id="projectCreate">Edit Draft</button>
    
    <button id="button" class="font-semibold px-4 py-2 border border-gray-200 rounded-md shadow-sm hover:bg-gray-100">Build Gantt</button>
    <button id="button2" class="font-semibold px-4 py-2 border border-green-200 rounded-md shadow-sm hover:bg-gray-100 disabled:bg-gray-200" disabled>Create Project</button>
  </div>
</div>





<div id="dataGrid" class="w-full"></div>
<div id="popup"></div>
<div id="popup2"></div>



<div id="gantt"></div>

@endsection

@section('scripts')
<script src="{{ asset('js/tmp-project/detail.js') }}"></script>

<script>


</script>
@endsection



