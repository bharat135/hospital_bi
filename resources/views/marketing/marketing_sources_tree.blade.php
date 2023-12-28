@extends('layouts/contentLayoutMaster')

@section('title', 'Marketing Sources')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('fonts/font-awesome/css/font-awesome.min.css'))}}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/jstree.min.css'))}}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-tree.css')) }}">
@endsection

@section('content')
<!-- Tree section -->
<section class="basic-custom-icons-tree">
  <div class="row">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Marketing Sources tree view</h4>
        </div>
        <div class="card-body">
          <div id="jstree-basic">
            <ul>
                @foreach($marketingSources as $source)
                    @if($source->parent_branch === null)
                        <li data-jstree='{"icon": "far fa-folder"}'>
                            {{ $source->name }}
                            @include('partials.tree-item', ['parentId' => $source->id])
                        </li>
                    @endif
                @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!--/ Tree section -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script>
    $(document).ready(function () {
        $('#marketing-sources-tree').jstree();
    });
  </script>  
  
  <script src="{{ asset(mix('vendors/js/extensions/jstree.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-tree.js')) }}"></script>
@endsection
