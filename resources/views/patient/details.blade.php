

@extends('layouts/contentLayoutMaster')

@section('title', 'Calling window')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
@endsection

@section('content')
<div class="container p-2">
  <div class="row border p-2">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header bg-primary">
          <h4 class="card-title" style="color:whitesmoke">Patient information</h4>
        </div>
        <ul class="list-group">
          <li class="list-group-item">
            <label>
              <strong>Marketing campaign: </strong>
            </label>
            <br>
            <label class="pull-right"> 
              Digital Marketing - Facebook-Thane
            </label>
          </li>

          <li class="list-group-item">
            <label>
              <strong>Name: </strong>
            </label>
            <br>
            <label class="pull-right"> 
              ABHAY SHAH
            </label>
          </li>

          <li class="list-group-item">
            <label>
              <strong>Wife's Contact No: </strong>
            </label>
            <br>
            <label class="pull-right"> 
              9999999999
            </label>
          </li>

          <li class="list-group-item">
            <label>
              <strong>Husband's Contact No: </strong>
            </label>
            <br>
            <label class="pull-right"> 
              8888888888
            </label>
          </li>

          <li class="list-group-item">
            <label>
              <strong>Email-id: </strong>
            </label>
            <br>
            <label class="pull-right"> 
              mailto:dev.khose.pratik@gmail.com
            </label>
          </li>

          <li class="list-group-item">
            <label>
              <strong>Marriage duration: </strong>
            </label>
            <br>
            <label class="pull-right"> 
              5 Years
            </label>
          </li>

        </ul>
      </div>
    </div>


    <div class="col-md-8">      
        <div class="card">
          <div class="card-header bg-primary">
            <h4 class="card-title" style="color:whitesmoke">Call status</h4>
          </div>
          <div class="container border p-2">
            <div class="row">
              <div class="col">
                <label>Call status</label>
                <select class="form-control form-select" onchange="show_dates(this.value)">
                  <option value="">Call not connected</option>
                  <option value="">Call Hangup</option>
                  <option value="26">Stop call</option>
                </select>
              </div>

              <div class="col">
                <label>Important Status</label>
                <select class="form-control form-select">
                  <option>Interested</option>
                  <option>Visited</option>
                  <option>Booked</option>
                </select>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col">
                <label>Patients seems</label>
                <select class="form-control form-select">
                  <option>Positive</option>
                  <option>Neutral</option>
                  <option>Negative</option>
                </select>
              </div>
              <div class="col">
                <label>Notes</label>
                <textarea class="form-control" placeholder="Notes"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="demo-inline-spacing">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" data-toggle="collapse" data-target="#scheduleDiv" aria-expanded="false" aria-controls="scheduleDiv" id="manualschedule" value="checked">
                  <label class="form-check-label" for="manualschedule">Manual Schedule</label>
                </div>
              </div>
            </div>
          
            <!-- Collapsible Div -->
            <div class="collapse" id="scheduleDiv">
              <div class="row mt-2">
              <div class="col">
                <label>Schedule date</label>
                <input type="date" name="" class="form-control">
              </div>
            
              <div class="col">
                <label>Schedule time</label>
                <input type="time" name="" class="form-control">
              </div>
            </div>
            </div>
          </div>
        </div>
   
      <div class="call_status">
          <div class="card">
            <div class="card-header bg-primary">
              <h4 class="card-title" style="color:whitesmoke">Call History</h4>
            </div>
            <div class="container border p-2">
              <div class="border p-1">
                <div class="row">
                  <div class="col-md-12">
                    <span>Called on: 30-Nov-23 | 11:54:25 am</span>
                  
                  </div>
                  <br />
                  <br />
                  <hr>
                  
                  <div class="col-md-6">
                    <label><strong>Calling Status</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>Call not connected</label></li>
                  </div>
                  <div class="col-md-6">
                    <label><strong>Important Status</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>Interested</label></li>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label><strong>Patients Seems</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>Neutral</label></li>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label><strong>Notes</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>Test information from IT</label></li>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label><strong>Schedule date</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>07 Nov 2023</label></li>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label><strong>Schedule time</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>12:00 PM</label></li>
                  </div>
                </div>
              </div>
              <br>
              <div class="border p-1">
                <div class="row">
                  <div class="col-md-12">
                    <span>Called on: 30-Nov-23 | 11:54:25 am</span>
                  </div>
                  <br />
                  <br />
                  <hr>
                  <div class="col-md-6">
                    <label><strong>Calling Status</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>Call not connected</label></li>
                  </div>
                  <div class="col-md-6">
                    <label><strong>Important Status</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>Interested</label></li>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label><strong>Patients Seems</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>Neutral</label></li>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label><strong>Notes</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>Test information from IT</label></li>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label><strong>Schedule date</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>07 Nov 2023</label></li>
                  </div>
                  <div class="col-md-6 mt-2">
                    <label><strong>Schedule time</strong></label>
                    <br>
                    <li type="disk" class="ml-3"><label>12:00 PM</label></li>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
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
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var checkbox = document.getElementById('manualschedule');
    var scheduleDiv = document.getElementById('scheduleDiv');

    // Initial check on page load
    toggleScheduleDiv();

    // Toggle the schedule div on checkbox change
    checkbox.addEventListener('change', function() {
      toggleScheduleDiv();
    });

    function toggleScheduleDiv() {
      if (checkbox.checked) {
        scheduleDiv.style.display = 'block';
      } else {
        scheduleDiv.style.display = 'none';
      }
    }
  });
</script>
<script>
  $(document).ready(function() {
    // Toggle the 'required' attribute based on checkbox state
    $("#manualschedule").change(function() {
      var inputs = $("#scheduleDiv input");
      inputs.prop("required", $(this).is(":checked"));
    });
  });
</script>
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>
@endsection
