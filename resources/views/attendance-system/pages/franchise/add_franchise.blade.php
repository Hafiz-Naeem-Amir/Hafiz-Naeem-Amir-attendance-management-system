@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">

                <form id="franchiseForm" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        {{-- LEFT COLUMN --}}
                        <div class="col-md-8">
                            {{-- Franchise Name --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Franchise Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" placeholder="Franchise Name" required>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            {{-- Phone --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            {{-- Address --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Address</label>
                                <div class="col-sm-9">
                                    <textarea name="address" class="form-control" rows="3" placeholder="Franchise Address"></textarea>
                                </div>
                            </div>

                            {{-- Status --}}
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 col-form-label text-end">Status</label>
                                <div class="col-sm-9">
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Buttons --}}
                            <div class="form-group row mt-4">
                                <div class="offset-sm-3">
                                    <button type="submit" class="btn btn-success" id="saveBtn">
                                        <i class="mdi mdi-plus"></i> Save Franchise
                                    </button>
                                    <a href="{{ route('franchises.index') }}" class="btn btn-warning">Cancel</a>
                                </div>
                            </div>

                        </div>

                        {{-- RIGHT COLUMN --}}
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="card-title mb-3">Franchise Logo</h4>

                                    <div class="mb-3 border rounded p-3" style="height:250px;display:flex;align-items:center;justify-content:center;">
                                        <img id="logoPreview" class="img-fluid" style="max-height:100%;object-fit:contain;">
                                    </div>

                                    <input type="file" name="logo" id="logoInput" class="d-none" accept="image/*">

                                    <button type="button" class="btn btn-primary w-100" onclick="document.getElementById('logoInput').click()">
                                        Upload Logo
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

                <div id="ajaxResponse" class="mt-3"></div>

            </div>
        </div>
    </div>
</div>

{{-- jQuery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {

        // Logo Preview
        $('#logoInput').change(function(e) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $('#logoPreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });

        // AJAX Form Submit
        $('#franchiseForm').submit(function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('franchises.store') }}"
                , type: "POST"
                , data: formData
                , contentType: false
                , processData: false
                , beforeSend: function() {
                    $('#saveBtn').prop('disabled', true).text('Saving...');
                    $('#ajaxResponse').html('');
                }
                , success: function(response) {
                    $('#saveBtn').prop('disabled', false).text('Save Franchise');
                    $('#ajaxResponse').html('<div class="alert alert-success">' + response.message + '</div>');
                    $('#franchiseForm')[0].reset();
                    $('#logoPreview').attr('src', '');
                }
                , error: function(xhr) {
                    $('#saveBtn').prop('disabled', false).text('Save Franchise');

                    let errors = xhr.responseJSON.errors;
                    let errorHtml = '<div class="alert alert-danger"><ul>';
                    $.each(errors, function(key, value) {
                        errorHtml += '<li>' + value[0] + '</li>';
                    });
                    errorHtml += '</ul></div>';
                    $('#ajaxResponse').html(errorHtml);
                }
            });

        });

    });

</script>
@endsection
