

@extends('layouts/contentLayoutMaster')

@section('title', 'Add Patient')

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
<form>
<div class="col-md-12 col-12">
  <div class="card">
    <div class="card-header bg-primary">
      <h4 class="card-title" style="color:whitesmoke">Patient form</h4>
    </div>

    <div class="card-body p-1">
    <div class="row">
        <div class="col-sm-6">
            <label for="center" class="form-label">Center</label>
            <select name="center" id="center" class="form-select">
                <option>Nashik</option>
                <option>Thane</option>
                <option>Pune</option>
                <option>Panvel</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="pt_type" class="form-label">Patient type <span style="color:red">*</span></label>
            <select name="pt_type" id="pt_type" class="form-select">
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label for="primary_source" class="form-label">Primary Source <span style="color:red">*</span></label>
            <select name="primary_source" id="primary_source" class="form-select">
                <option>DM</option>
                <option>TV</option>
                <option>Newspaper</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="secondary_source" class="form-label">Secondary Source <span style="color:red">*</span></label>
            <select name="secondary_source" id="secondary_source" class="form-select">
                <option>Facebook</option>
                <option>Google</option>
            </select>
        </div>
    </div>
  </div>
  </div>
</div>

  <div class="row">
     {{-- wife info end --}}
    <div class="col-md-6 col-12 mb-3">
        <div class="card">
          <div class="card-header bg-primary">
            <h4 class="card-title" style="color:whitesmoke">Wife info</h4>
          </div>
          <div class="card-body p-1">
            <div class="col-sm-12">
              <label for="wife_fname" class="form-label">First Name</label>
              <input type="text" name="wife_fname" id="wife_fname" value="" placeholder="First Name" class="form-control">

              <label for="wife_lname" class="form-label">Last Name</label>
              <input type="text" name="wife_lname" id="wife_lname" value="" placeholder="Last Name" class="form-control">

              <label for="wife_age" class="form-label">Age</label>
              <input type="number" name="wife_age" id="wife_age" value="" placeholder="Age" class="form-control">

              <label for="wife_contact" class="form-label">Contact number</label>
              <input type="number" name="wife_contact" id="wife_contact" value="" placeholder="Contact" class="form-control">
            </div>
          </div>
        </div>
    </div>
     {{-- wife info end --}}
       {{-- Husband info start --}}
        <div class="col-md-6 col-12 mb-3">
          <div class="card">
            <div class="card-header bg-primary">
              <h4 class="card-title" style="color:whitesmoke">Husband info</h4>
            </div>
            <div class="card-body p-1">
              <div class="col-sm-12">
                  <label for="husband_fname" class="form-label">First Name</label>
                  <input type="text" name="husband_fname" id="husband_fname" value="" placeholder="First Name" class="form-control">

                  <label for="husband_lname" class="form-label">Last Name</label>
                  <input type="text" name="husband_lname" id="husband_lname" value="" placeholder="Last Name" class="form-control">

                  <label for="husband_age" class="form-label">Age</label>
                  <input type="number" name="husband_age" id="husband_age" value="" placeholder="Age" class="form-control">

                  <label for="husband_contact" class="form-label">Contact number</label>
                  <input type="number" name="husband_contact" id="husband_contact" value="" placeholder="Contact" class="form-control">
              </div>
            </div>
          </div>
        </div>
          {{-- Husband info end --}}
    </div>
     <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-body p-1">
          <div class="row">            
            <div class="col-md-3 col-12">
              <label for="marriage_since" class="form-label">Marriage Since (In Years)</label>
              <input type="number" name="marriage_since" id="marriage_since" value="" placeholder="Number's only" class="form-control">
            </div>
            <div class="col-md-3 col-12">
              <label for="treatement_equire" class="form-label">Treatment enquire</label>
              <select name="treatement_equire" id="treatement_equire" class="form-select">
                  <option>IVF</option>
                  <option>IUI</option>
                  <option>Other Treatment</option>
              </select>
            </div>
            <div class="col-md-6 col-12">
              <label for="taluka" class="form-label">Notes</label>
              <textarea name="advance_info" id="" rows="2" cols="20" class="form-control" placeholder="Enter Notes"></textarea>
            </div>
          </div>
        </div>
      </div>
     </div>
     {{-- Quetions with radio button start --}}
     <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-body p-1">
          <div class="row">            
            <div class="col-md-6 col-12">
              <h5>1. Have you visited any hospital/doctors previously?</h5>
              <div class="demo-inline-spacing">
                <div class="form-check">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" />
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="option2" />
                    <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">              
              <h5>2. Have you ever gone through IVF or IUI previously.</h5>
              <div class="demo-inline-spacing">
                <div class="form-check">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio3" value="option1" />
                    <label class="form-check-label" for="inlineRadio3">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio4" value="option2" />
                    <label class="form-check-label" for="inlineRadio4">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">  
            <div class="col-md-6 col-12">
              
                <h5>3. Is any Male Fertility Issue addressed.</h5>
             
              <div class="demo-inline-spacing">
                <div class="form-check">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio5" value="option1" />
                    <label class="form-check-label" for="inlineRadio5">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio6" value="option2" />
                    <label class="form-check-label" for="inlineRadio6">No</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <h5>4. Is any Female Fertility Issue addressed.</h5>
              <div class="demo-inline-spacing">
                <div class="form-check">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio7" value="option1" />
                    <label class="form-check-label" for="inlineRadio7">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio8" value="option2" />
                    <label class="form-check-label" for="inlineRadio8">No</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
      {{-- Quetions with radio button end --}}


    </div>
    <a class="btn btn-primary me-1 waves-effect waves-float waves-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
      Additional Information
    </a>
  <br />
  <br />
  <br />

  <div class="collapse" id="collapseExample">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <h4 class="card-title" style="color:whitesmoke">Additional Information</h4>
        </div>
        <div class="card-body p-1">
          <div class="row">
           
        <div class="col">
            <label for="country" class="form-label">Country</label>
            <br />
            <select name="country" id="country" class="form-select">
              <option>India</option>
              <option>France</option>
            </select>
        </div>
        
        <div class="col">
            <label for="state" class="form-label">State</label>
            <br />
            <select name="state" id="state" class="form-select">
              <option>Maharashtra</option>
              <option>Gujrat</option>
            </select>
        </div>
      </div>
      
      <div class="row">
        <div class="col">
            <label for="district" class="form-label">District</label>
            <br />
            <select name="district" id="district" class="form-select">
              <option>Nashik</option>
              <option>Ahmednagar</option>
            </select>
        </div>
        
        <div class="col">
            <label for="taluka" class="form-label">Taluka</label>
            <br />
            <select name="taluka" id="taluka" class="form-select">
              <option>Dindori</option>
              <option>Nashik</option>
            </select>
        </div>
      </div>
      
      <div class="row">
        <div class="col-6">
            <label for="city" class="form-label">City</label>
            <br />
            <select name="city" id="city" class="form-select">
              <option>Dindori</option>
              <option>Nashik</option>
            </select>
        </div>
        
         
      </div>
    </div>
  </div>
  </div>
      
    
  </div>
  <div class="col-sm-9 offset-sm-9">
    <button type="reset" class="btn btn-primary me-1 waves-effect waves-float waves-light">Submit</button>    
    <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
  </div>
</form>
<!-- Ajax Sourced Server-side -->
{{--  --}}

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get the form element
    var form = document.querySelector("form");

    // Add a submit event listener to the form
    form.addEventListener("submit", function (event) {
      // Get the values of wife and husband names
      var wifeFirstName = document.getElementById("wife_fname").value.trim();
      var wifeLastName = document.getElementById("wife_lname").value.trim();
      var husbandFirstName = document.getElementById("husband_fname").value.trim();
      var husbandLastName = document.getElementById("husband_lname").value.trim();

      // Get the values of contact numbers
      var wifeContact = document.getElementById("wife_contact").value.trim();
      var husbandContact = document.getElementById("husband_contact").value.trim();

      // Check if at least one name and contact number is provided
      if ((wifeFirstName || wifeLastName || husbandFirstName || husbandLastName) && (wifeContact || husbandContact)) {
        // Valid form, allow submission
        return true;
      } else {
        // Prevent form submission
        event.preventDefault();

        // Display an alert or customize this part based on your requirements
        alert("Please provide at least one name (wife or husband) and a contact number.");
      }
    });
  });
</script>
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
