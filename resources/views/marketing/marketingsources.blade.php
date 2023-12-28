@extends('layouts/contentLayoutMaster')

@section('title', 'Marketing Sources')

@section('vendor-style')
  <!-- Vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/sweetalert2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{asset(mix('css/base/plugins/extensions/ext-component-sweet-alerts.css'))}}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection


@section('content')

<!-- Role cards -->
<!-- table -->
<section id="ajax-datatable">
  <div class="row">
      <div class="col-12">
          <div class="card p-1">
              <div class="card-header d-flex justify-content-between align-items-center">                 
                  <button class="btn btn-success btn-sm ms-auto" id="createNewMarketingSource" data-bs-target="#createSources" data-bs-toggle="modal">Create New Marketing Source</button>
              </div>
              <div class="card-datatable">
                  <table class="datatables-ajax table table-responsive" id="marketing-sources-table">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Parent Branch</th>
                              <th>Level</th>
                              <th>Is Active</th>
                              <th>Is Deleted</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <!-- Add your table body here -->
                  </table>
              </div>
          </div>
      </div>
  </div>
</section>


<!-- Create Marketing source modal -->
<div class="modal fade" id="createSources" tabindex="-1" aria-labelledby="createSourcesLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createSourcesLabel">Create Marketing Sources</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>           
      </div>
      <div class="modal-body">
          <form id="createSourcesForm" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group mb-1">
                <label for="parent_branch" class="form-label">Parent Branch:</label>
                <select class="select2 form-select" id="parent_branch" name="parent_branch" >
                  
                </select>
            </div>
            <button type="button" class="btn btn-primary btn-sm" id="saveButton">Save</button>
          </form>
      </div>
    </div>
  </div>
</div>

<!-- Upadte Marketing source modal -->

<div class="modal fade" id="updateSources" tabindex="-1" aria-labelledby="updateSourcesLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateSourcesLabel">Update Marketing Source</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form id="updateSourcesForm" method="POST">
                  @csrf
                  @method('PUT') 
                  <div class="form-group">
                      <label for="update_name" class="form-label">Name:</label>
                      <input type="text" class="form-control" id="update_name" name="name" required>
                  </div>
                  <div class="form-group mb-1">
                      <label for="update_parent_branch" class="form-label" >Parent Branch:</label>
                      <select class="select2 form-control" id="update_parent_branch" name="parent_branch" >                       
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary btn-sm" id="updateButton">Update</button>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
@section('vendor-script')
  <!-- Vendor js files -->
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>  
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@section('page-script')
<script>
  $(document).ready(function () {
    //Datatable
      var table = $('#marketing-sources-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('sources.index') }}",
          columns: [
              { data: null, orderable: false, searchable: false, render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1; 
                } },          
              { data: 'name', name: 'name' },
              { data: 'parent_branch', name: 'parent_branch' },
              { data: 'level', name: 'level' },
              { data: 'is_active', name: 'is_active' },
              { data: 'is_deleted', name: 'is_deleted' },
              { data: 'action', name: 'action', orderable: false, searchable: false },
          ]
      });
      
    //Fetching parent sources
      $.ajax({
            url: "{{ route('sources.parentbranches') }}",
            type: "GET",
            success: function(data) {
                $.each(data, function(key, value) {
                    $('#parent_branch').append('<option value="' + key + '">' + value + '</option>');
                });
            }
        }); 
      //Create submit function
      $('#saveButton').click(function() {
            var currentPage = table.page();
            $.ajax({
                url: "{{ route('sources.store') }}",
                type: "POST",
                data: $('#createSourcesForm').serialize(),
                success: function(response) {
                  showSweetAlert('Marketing Source Created!', response.message, function() {
                    $('#createSources').modal('hide');  
                    var currentPageData = table.rows({ page: 'current' }).data();
                    table.clear().rows.add(currentPageData).draw('page');
                    table.page(currentPage).draw('page');                       
                  });  
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                      showSweetAlertError('Error!', error.responseJSON.message, function() {
                      $('#createSources').modal('hide');              
                      }); 
                    });
                }
            });
        });
     //Update modal show Function
      $('#marketing-sources-table').on('click', '.editMarketingSource', function () {
          var id = $(this).data('id');
          $.get("/marketing/sources" + '/' + id + '/edit', function (data) {
              $('#updateSources').modal('show');
              $('#update_id').val(data.marketingSource.id);
              $('#updateSources').data('id', id); //set id on modal
              $('#update_name').val(data.marketingSource.name);
                var parentBranchSelect = $('#update_parent_branch');
                parentBranchSelect.empty();
                $.each(data.parentBranches, function (key, value) {
                    parentBranchSelect.append('<option value="' + key + '">' + value + '</option>');
                });
                parentBranchSelect.val(data.marketingSource.parent_branch);
          })
      });
      //Update submit function
      $('#updateSourcesForm').submit(function (event) {
            var currentPage = table.page();
            event.preventDefault();
            //Getting data from update form
            var id = $('#updateSources').data('id'); //get id from modal
            var name = $('#update_name').val();
            var parent_branch = $('#update_parent_branch').val();
            $.ajax({
                url: "{{ route('sources.update') }}",
                type: "PUT",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: id,
                    name: name,
                    parent_branch: parent_branch,
                },
                success: function(response) {
                  showSweetAlert('Marketing Source Updated!', response.message, function() {
                    $('#updateSources').modal('hide');  
                    var currentPageData = table.rows({ page: 'current' }).data();
                    table.clear().rows.add(currentPageData).draw('page');
                    table.page(currentPage).draw('page');                       
                  });  
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                      showSweetAlertError('Error!', error.responseJSON.message, function() {
                      $('#updateSources').modal('hide');              
                      }); 
                    });
                }
            });
        });
        //Delete row
      $('#marketing-sources-table').on('click', '.deleteMarketingSource', function () {
        var currentPage = table.page();
          var id = $(this).data('id');          
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this marketing source?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false
            }).then(function (result) {
                if (result.value) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('sources.index') }}",
                        data: { _token: $('meta[name="csrf-token"]').attr('content'), id: id,},
                        success: function (response) {
                            showSweetAlert('Marketing Source Deleted!', response.message, function() {
                            var currentPageData = table.rows({ page: 'current' }).data();
                            table.clear().rows.add(currentPageData).draw('page');
                            table.page(currentPage).draw('page');                       
                        }); 
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });

                } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: 'Cancelled',
                    text: 'Your imaginary file is safe :)',
                    icon: 'error',
                    customClass: {
                    confirmButton: 'btn btn-success'
                    }
                });
                }
            });      
      });
  });
</script>  
  {{-- <script src="{{ asset(mix('js/scripts/pages/app-access-roles.js')) }}"></script> --}}
  <script src="{{ asset(mix('js/scripts/extensions/ext-component-sweet-alerts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/sweetalert2.all.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/polyfill.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
@endsection

