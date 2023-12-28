

@extends('layouts/contentLayoutMaster')

@section('title', 'Patients')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
@endsection


@section('content')

<div class="col-md-12 col-12">
  <div class="card">
    <div class="card-header border-bottom bg-primary">
      <h4 class="card-title" style="color:whitesmoke">Patient search</h4>
    </div>
    <div class="card-body p-1">
      <div class="row"> 
        <div class="col-sm-6">
          <label class="form-label">Search by</label>
          <select class="form-control form-select">
              <option value="1">Name</option>
              <option value="2">Mobile No</option>
          </select>
        </div>
        <div class="col-sm-6">
          <label class="form-label">Search input</label>
          <input type="text" name="" class="form-control">
        </div> 
      </div>
      <div class="demo-inline-spacing">
        <div class="row">
          <div class="col-sm-12">
            <button type="reset" class="btn btn-primary me-1">Submit</button>
            <button type="reset" class="btn btn-outline-secondary">Reset</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="result_table">
    
  </div>

</div>



<section id="ajax-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom bg-primary">
          <h4 class="card-title" style="color:whitesmoke">Patient Lists</h4>
        </div>
        <div class="card-datatable">
          <table class="datatables-ajax table table-responsive">
            <thead>
              <tr>
                <th>Patient Name</th>
                <th>Added date</th>
                <th>Added by</th>
                <th>Wife no</th>
                <th>Husband no</th>
                <th>City</th>
                <th>Calling Status</th>
                <th>Important Status</th>
                <th>Called Count</th>
                <th>Updated by</th>
                <th>Call</th>             
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ajax Sourced Server-side -->
{{--  --}}
@endsection


@section('vendor-script')
{{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>
@endsection
