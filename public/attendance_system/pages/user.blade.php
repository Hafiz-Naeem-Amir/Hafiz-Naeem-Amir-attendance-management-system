
@extends('layouts.admin')
@section('content')
<div class="content-wrapper" bis_skin_checked="1">

    <div class="row" bis_skin_checked="1">
        <div class="col-md-12 grid-margin" bis_skin_checked="1">
            <div class="card" bis_skin_checked="1">
                <div class="card-body sticky-breadcrumb" bis_skin_checked="1">
                    <div class="bcca-breadcrumb float-left" bis_skin_checked="1">
                        <div class="bcca-breadcrumb-item" bis_skin_checked="1">User List</div>
                        <div class="bcca-breadcrumb-item" bis_skin_checked="1">
                            <a href="dashboard">Dashboard</a>
                        </div>
                    </div>

                    <div class="float-right breadcrumb-external-button" bis_skin_checked="1">
                        <button class="btn btn-success btn-fw" type="button" id="toggleUserCreate">
                            <i class="mdi mdi-account-plus"></i>Add New User
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:id="j0UWkCn5TNnwFOYmIrQq" class="row" bis_skin_checked="1">

        <div class="col-lg-12 grid-margin" wire:init="$set('readyToLoad', 'true')" bis_skin_checked="1">
            <div class="card" bis_skin_checked="1">
                <div class="card-body" bis_skin_checked="1">
                    <h4 class="card-title"></h4>
                    <div class="fluid-container" bis_skin_checked="1">

                        <div class="row font-85-p" bis_skin_checked="1">
                            <div class="col-sm-12 col-md-7 col-lg-7" bis_skin_checked="1">
                                <label>
                                    Show
                                    <select aria-controls="example"
                                        class="custom-select custom-select-sm form-control form-control-sm width-auto"
                                        wire:model="perPage">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    entries
                                </label>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-5" bis_skin_checked="1">
                                <div class="text-right" bis_skin_checked="1">
                                    <input type="text" class="form-control livewire-table-input-search"
                                        placeholder="Search by name, email..." aria-controls="example"
                                        wire:model.debounce.300ms="search" autofocus="">
                                </div>
                            </div>
                        </div>

                        <div class="row" bis_skin_checked="1">
                            <div class="col-lg-12 table-responsive" wire:loading="" bis_skin_checked="1">

                                <table class="table table-bordered with-drop-button">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>
                                                <a class="text-decoration-none" wire:click.prevent="sortBy('name')"
                                                    role="button" href="#">
                                                    Name
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-decoration-none" wire:click.prevent="sortBy('email')"
                                                    role="button" href="#">
                                                    Email
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-decoration-none" wire:click.prevent="sortBy('status')"
                                                    role="button" href="#">
                                                    Status
                                                </a>
                                            </th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>

                                    <tbody class="loading-transition-background">
                                        <tr>
                                            <td>
                                                <span class="loading-transition">362</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="loading-transition">44</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">_____________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="loading-transition">696</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">_____________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">___________________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="loading-transition">74</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">____________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">___________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="loading-transition">150</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">______________________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="loading-transition">367</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">________________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">______________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="loading-transition">998</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">___________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">_____________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="loading-transition">844</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">____________________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">________________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="loading-transition">392</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">____________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">_______________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="loading-transition">820</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">______________________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">_____________________</span>
                                            </td>
                                            <td>
                                                <span class="loading-transition">__________</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm loading-transition">_____</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12 table-responsive" wire:loading.remove="" bis_skin_checked="1">

                                <table class="table table-bordered with-drop-button">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>
                                                <a class="text-decoration-none" wire:click.prevent="sortBy('name')"
                                                    role="button" href="#">
                                                    Name <svg class="bi bi-arrow-down-up" width="1em"
                                                        height="1em" viewBox="0 0 16 16" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M11 3.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M10.646 2.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L11 3.707 8.354 6.354a.5.5 0 1 1-.708-.708l3-3zm-9 7a.5.5 0 0 1 .708 0L5 12.293l2.646-2.647a.5.5 0 1 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M5 2.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V3a.5.5 0 0 1 .5-.5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-decoration-none" wire:click.prevent="sortBy('email')"
                                                    role="button" href="#">
                                                    Email <svg class="bi bi-arrow-down-up" width="1em"
                                                        height="1em" viewBox="0 0 16 16" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M11 3.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M10.646 2.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L11 3.707 8.354 6.354a.5.5 0 1 1-.708-.708l3-3zm-9 7a.5.5 0 0 1 .708 0L5 12.293l2.646-2.647a.5.5 0 1 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M5 2.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V3a.5.5 0 0 1 .5-.5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-decoration-none" wire:click.prevent="sortBy('status')"
                                                    role="button" href="#">
                                                    Status <svg class="bi bi-arrow-down-up" width="1em"
                                                        height="1em" viewBox="0 0 16 16" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M11 3.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M10.646 2.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L11 3.707 8.354 6.354a.5.5 0 1 1-.708-.708l3-3zm-9 7a.5.5 0 0 1 .708 0L5 12.293l2.646-2.647a.5.5 0 1 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M5 2.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V3a.5.5 0 0 1 .5-.5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-weight-medium">1</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `galbb`,
                                                editingName: `galbb`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/470e8975-4a51-4504-9cf9-d524e4c438bd', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">galbb</span>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `galbb@galbb.com`,
                                                editingEmail: `galbb@galbb.com`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/470e8975-4a51-4504-9cf9-d524e4c438bd', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable" x-text="originalEmail">galbb@galbb.com</span>

                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: '470e8975-4a51-4504-9cf9-d524e4c438bd',
                                                    ip: '',
                                                    designationId: '',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-470e8975-4a51-4504-9cf9-d524e4c438bd').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-470e8975-4a51-4504-9cf9-d524e4c438bd').html(data);
                                                                    $('#carousel_470e8975-4a51-4504-9cf9-d524e4c438bd').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_470e8975-4a51-4504-9cf9-d524e4c438bd').carousel(slide);
                                                        }
                                                    }
                                                }" bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_470e8975-4a51-4504-9cf9-d524e4c438bd">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_470e8975-4a51-4504-9cf9-d524e4c438bd">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_470e8975-4a51-4504-9cf9-d524e4c438bd">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item text-danger"
                                                                            wire:click.prevent="statusUpdate(&quot;470e8975-4a51-4504-9cf9-d524e4c438bd&quot;, 0)"
                                                                            href="#">
                                                                            <i class="mdi mdi-account-off-outline"></i>
                                                                            Make Inactive</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_470e8975-4a51-4504-9cf9-d524e4c438bd">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_470e8975-4a51-4504-9cf9-d524e4c438bd">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_470e8975-4a51-4504-9cf9-d524e4c438bd">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/470e8975-4a51-4504-9cf9-d524e4c438bd/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_470e8975-4a51-4504-9cf9-d524e4c438bd">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-470e8975-4a51-4504-9cf9-d524e4c438bd"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">2</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `jui`,
                                                editingName: `jui`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">jui</span>
                                                    <label class="badge designation-badge ml-2 p-1">
                                                        Engineering
                                                    </label>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `jui@gmail.com`,
                                                editingEmail: `jui@gmail.com`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable" x-text="originalEmail">jui@gmail.com</span>

                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-danger">Inactive</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: 'f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4',
                                                    ip: '',
                                                    designationId: '8bd671f2-82ee-49f3-9dff-f732a1b70091',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4').html(data);
                                                                    $('#carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4').carousel(slide);
                                                        }
                                                    }
                                                }" bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            wire:click.prevent="statusUpdate(&quot;f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4&quot;)"
                                                                            href="#">
                                                                            <i
                                                                                class="mdi mdi-account-check-outline"></i>
                                                                            Make Active</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-f441e6c4-6f9d-4c63-a18d-2dd98bbe3ac4"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">3</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `Josh`,
                                                editingName: `Josh`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/029e0a9e-3021-46f2-b9ed-3788e5cd9d61', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">Josh</span>
                                                    <label class="badge designation-badge ml-2 p-1">
                                                        ONIS
                                                    </label>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `aphrodisierendunfassbarerstrauss@ultra.fyi`,
                                                editingEmail: `aphrodisierendunfassbarerstrauss@ultra.fyi`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/029e0a9e-3021-46f2-b9ed-3788e5cd9d61', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable"
                                                    x-text="originalEmail">aphrodisierendunfassbarerstrauss@ultra.fyi</span>

                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: '029e0a9e-3021-46f2-b9ed-3788e5cd9d61',
                                                    ip: '',
                                                    designationId: '236a7b1b-ee0b-48da-b293-89a5253b80e1',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-029e0a9e-3021-46f2-b9ed-3788e5cd9d61').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-029e0a9e-3021-46f2-b9ed-3788e5cd9d61').html(data);
                                                                    $('#carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61').carousel(slide);
                                                        }
                                                    }
                                                }" bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item text-danger"
                                                                            wire:click.prevent="statusUpdate(&quot;029e0a9e-3021-46f2-b9ed-3788e5cd9d61&quot;, 0)"
                                                                            href="#">
                                                                            <i class="mdi mdi-account-off-outline"></i>
                                                                            Make Inactive</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/029e0a9e-3021-46f2-b9ed-3788e5cd9d61/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_029e0a9e-3021-46f2-b9ed-3788e5cd9d61">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-029e0a9e-3021-46f2-b9ed-3788e5cd9d61"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">4</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `JAMES`,
                                                editingName: `JAMES`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/ebe4e372-7472-4d00-a60c-afe5b710ffac', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">JAMES</span>
                                                    <label class="badge designation-badge ml-2 p-1">
                                                        ONIS
                                                    </label>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `jamesmaina3020@gmail.com`,
                                                editingEmail: `jamesmaina3020@gmail.com`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/ebe4e372-7472-4d00-a60c-afe5b710ffac', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable"
                                                    x-text="originalEmail">jamesmaina3020@gmail.com</span>

                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: 'ebe4e372-7472-4d00-a60c-afe5b710ffac',
                                                    ip: '',
                                                    designationId: '236a7b1b-ee0b-48da-b293-89a5253b80e1',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-ebe4e372-7472-4d00-a60c-afe5b710ffac').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-ebe4e372-7472-4d00-a60c-afe5b710ffac').html(data);
                                                                    $('#carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac').carousel(slide);
                                                        }
                                                    }
                                                }" bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item text-danger"
                                                                            wire:click.prevent="statusUpdate(&quot;ebe4e372-7472-4d00-a60c-afe5b710ffac&quot;, 0)"
                                                                            href="#">
                                                                            <i class="mdi mdi-account-off-outline"></i>
                                                                            Make Inactive</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/ebe4e372-7472-4d00-a60c-afe5b710ffac/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_ebe4e372-7472-4d00-a60c-afe5b710ffac">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-ebe4e372-7472-4d00-a60c-afe5b710ffac"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">5</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `janki testing`,
                                                editingName: `janki testing`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/4605aab7-f50a-441f-bdea-9b74e7282f08', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">janki testing</span>
                                                    <label class="badge designation-badge ml-2 p-1">
                                                        ONIS
                                                    </label>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `testingjanki@janki.cpm`,
                                                editingEmail: `testingjanki@janki.cpm`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/4605aab7-f50a-441f-bdea-9b74e7282f08', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable"
                                                    x-text="originalEmail">testingjanki@janki.cpm</span>

                                                <span x-show="isEditing" class="editable-dom" style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: '4605aab7-f50a-441f-bdea-9b74e7282f08',
                                                    ip: '',
                                                    designationId: '236a7b1b-ee0b-48da-b293-89a5253b80e1',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-4605aab7-f50a-441f-bdea-9b74e7282f08').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-4605aab7-f50a-441f-bdea-9b74e7282f08').html(data);
                                                                    $('#carousel_4605aab7-f50a-441f-bdea-9b74e7282f08').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_4605aab7-f50a-441f-bdea-9b74e7282f08').carousel(slide);
                                                        }
                                                    }
                                                }" bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_4605aab7-f50a-441f-bdea-9b74e7282f08">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_4605aab7-f50a-441f-bdea-9b74e7282f08">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_4605aab7-f50a-441f-bdea-9b74e7282f08">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item text-danger"
                                                                            wire:click.prevent="statusUpdate(&quot;4605aab7-f50a-441f-bdea-9b74e7282f08&quot;, 0)"
                                                                            href="#">
                                                                            <i class="mdi mdi-account-off-outline"></i>
                                                                            Make Inactive</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_4605aab7-f50a-441f-bdea-9b74e7282f08">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_4605aab7-f50a-441f-bdea-9b74e7282f08">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_4605aab7-f50a-441f-bdea-9b74e7282f08">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/4605aab7-f50a-441f-bdea-9b74e7282f08/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_4605aab7-f50a-441f-bdea-9b74e7282f08">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-4605aab7-f50a-441f-bdea-9b74e7282f08"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">6</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `samir`,
                                                editingName: `samir`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/4b278eb6-7698-4d00-a55c-b408c4684f0a', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">samir</span>
                                                    <label class="badge designation-badge ml-2 p-1">
                                                        ONIS
                                                    </label>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `contact@ps-solutions.ma`,
                                                editingEmail: `contact@ps-solutions.ma`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/4b278eb6-7698-4d00-a55c-b408c4684f0a', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable"
                                                    x-text="originalEmail">contact@ps-solutions.ma</span>

                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: '4b278eb6-7698-4d00-a55c-b408c4684f0a',
                                                    ip: '',
                                                    designationId: '236a7b1b-ee0b-48da-b293-89a5253b80e1',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-4b278eb6-7698-4d00-a55c-b408c4684f0a').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-4b278eb6-7698-4d00-a55c-b408c4684f0a').html(data);
                                                                    $('#carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a').carousel(slide);
                                                        }
                                                    }
                                                }"
                                                    bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item text-danger"
                                                                            wire:click.prevent="statusUpdate(&quot;4b278eb6-7698-4d00-a55c-b408c4684f0a&quot;, 0)"
                                                                            href="#">
                                                                            <i
                                                                                class="mdi mdi-account-off-outline"></i>
                                                                            Make Inactive</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/4b278eb6-7698-4d00-a55c-b408c4684f0a/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_4b278eb6-7698-4d00-a55c-b408c4684f0a">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-4b278eb6-7698-4d00-a55c-b408c4684f0a"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">7</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `Rohit Gupta`,
                                                editingName: `Rohit Gupta`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/41234415-bb35-4909-b0c1-72a5ce4edc5f', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">Rohit Gupta</span>
                                                    <label class="badge designation-badge ml-2 p-1">
                                                        ONIS
                                                    </label>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `rohit@redoq.com`,
                                                editingEmail: `rohit@redoq.com`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/41234415-bb35-4909-b0c1-72a5ce4edc5f', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable" x-text="originalEmail">rohit@redoq.com</span>

                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: '41234415-bb35-4909-b0c1-72a5ce4edc5f',
                                                    ip: '',
                                                    designationId: '236a7b1b-ee0b-48da-b293-89a5253b80e1',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-41234415-bb35-4909-b0c1-72a5ce4edc5f').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-41234415-bb35-4909-b0c1-72a5ce4edc5f').html(data);
                                                                    $('#carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f').carousel(slide);
                                                        }
                                                    }
                                                }"
                                                    bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item text-danger"
                                                                            wire:click.prevent="statusUpdate(&quot;41234415-bb35-4909-b0c1-72a5ce4edc5f&quot;, 0)"
                                                                            href="#">
                                                                            <i
                                                                                class="mdi mdi-account-off-outline"></i>
                                                                            Make Inactive</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/41234415-bb35-4909-b0c1-72a5ce4edc5f/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_41234415-bb35-4909-b0c1-72a5ce4edc5f">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-41234415-bb35-4909-b0c1-72a5ce4edc5f"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">8</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `Asit Poddar`,
                                                editingName: `Asit Poddar`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/9a55bf25-34f6-419a-9596-292f59682e39', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">Asit Poddar</span>
                                                    <label class="badge designation-badge ml-2 p-1">
                                                        ONIS
                                                    </label>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `asit@poddar.com`,
                                                editingEmail: `asit@poddar.com`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/9a55bf25-34f6-419a-9596-292f59682e39', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable" x-text="originalEmail">asit@poddar.com</span>

                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: '9a55bf25-34f6-419a-9596-292f59682e39',
                                                    ip: '',
                                                    designationId: '236a7b1b-ee0b-48da-b293-89a5253b80e1',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-9a55bf25-34f6-419a-9596-292f59682e39').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-9a55bf25-34f6-419a-9596-292f59682e39').html(data);
                                                                    $('#carousel_9a55bf25-34f6-419a-9596-292f59682e39').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_9a55bf25-34f6-419a-9596-292f59682e39').carousel(slide);
                                                        }
                                                    }
                                                }"
                                                    bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_9a55bf25-34f6-419a-9596-292f59682e39"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_9a55bf25-34f6-419a-9596-292f59682e39"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-9a55bf25-34f6-419a-9596-292f59682e39"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_9a55bf25-34f6-419a-9596-292f59682e39">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_9a55bf25-34f6-419a-9596-292f59682e39">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_9a55bf25-34f6-419a-9596-292f59682e39">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item text-danger"
                                                                            wire:click.prevent="statusUpdate(&quot;9a55bf25-34f6-419a-9596-292f59682e39&quot;, 0)"
                                                                            href="#">
                                                                            <i
                                                                                class="mdi mdi-account-off-outline"></i>
                                                                            Make Inactive</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_9a55bf25-34f6-419a-9596-292f59682e39">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_9a55bf25-34f6-419a-9596-292f59682e39">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_9a55bf25-34f6-419a-9596-292f59682e39">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/9a55bf25-34f6-419a-9596-292f59682e39/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_9a55bf25-34f6-419a-9596-292f59682e39">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-9a55bf25-34f6-419a-9596-292f59682e39"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-9a55bf25-34f6-419a-9596-292f59682e39"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-9a55bf25-34f6-419a-9596-292f59682e39"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-9a55bf25-34f6-419a-9596-292f59682e39"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-9a55bf25-34f6-419a-9596-292f59682e39"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-9a55bf25-34f6-419a-9596-292f59682e39"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-9a55bf25-34f6-419a-9596-292f59682e39"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">9</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `Kutub Uddin Shihab`,
                                                editingName: `Kutub Uddin Shihab`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/bec1717c-f41e-4d7a-83b7-ec0d865dc742', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">Kutub Uddin
                                                        Shihab</span>
                                                    <label class="badge designation-badge ml-2 p-1">
                                                        ONIS
                                                    </label>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `kutubuddinsihab@gmail.com`,
                                                editingEmail: `kutubuddinsihab@gmail.com`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/bec1717c-f41e-4d7a-83b7-ec0d865dc742', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable"
                                                    x-text="originalEmail">kutubuddinsihab@gmail.com</span>

                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: 'bec1717c-f41e-4d7a-83b7-ec0d865dc742',
                                                    ip: '',
                                                    designationId: '236a7b1b-ee0b-48da-b293-89a5253b80e1',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-bec1717c-f41e-4d7a-83b7-ec0d865dc742').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-bec1717c-f41e-4d7a-83b7-ec0d865dc742').html(data);
                                                                    $('#carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742').carousel(slide);
                                                        }
                                                    }
                                                }"
                                                    bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item text-danger"
                                                                            wire:click.prevent="statusUpdate(&quot;bec1717c-f41e-4d7a-83b7-ec0d865dc742&quot;, 0)"
                                                                            href="#">
                                                                            <i
                                                                                class="mdi mdi-account-off-outline"></i>
                                                                            Make Inactive</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/bec1717c-f41e-4d7a-83b7-ec0d865dc742/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_bec1717c-f41e-4d7a-83b7-ec0d865dc742">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-bec1717c-f41e-4d7a-83b7-ec0d865dc742"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-medium">10</td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalName: `ABC testing `,
                                                editingName: `ABC testing `,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/827302a1-0037-4a75-9b51-418110d1ea80', {
                                                            name: this.editingName
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalName = this.editingName;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.name[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingName = this.originalName;
                                                }

                                            }" @click.away="cancel">

                                                <span x-show="!isEditing">
                                                    <span @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                        class="editable" x-text="originalName">ABC testing </span>
                                                    <label class="badge designation-badge ml-2 p-1">
                                                        ONIS
                                                    </label>
                                                </span>


                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="text" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingName" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>

                                            </td>
                                            <td x-data="{
                                                isEditing: false,
                                                originalEmail: `abcd@gmail.com`,
                                                editingEmail: `abcd@gmail.com`,
                                                error: false,
                                                loading: false,
                                                focus: function() {
                                                    const textInput = this.$refs.textInput;
                                                    textInput.focus();
                                                    textInput.select();
                                                },
                                                update: function() {
                                                    this.loading = true;
                                                    this.error = false;
                                                    axios.patch('https://www.kingpabel.com/attendance-management-system/user/827302a1-0037-4a75-9b51-418110d1ea80', {
                                                            email: this.editingEmail
                                                        })
                                                        .then(({ data }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            this.originalEmail = this.editingEmail;
                                                            this.isEditing = false;
                                                            this.error = false;
                                                        })
                                                        .catch(({ response }) = & gt;
                                                        {
                                                            this.loading = false;
                                                            if (response.status == 422 & amp; & amp;
                                                                (this.error = response.data.errors.email[0])) {
                                                                toastr.error(this.error, '', { progressBar: true });
                                                            } else {
                                                                toastr.error('Something Went Wrong. Try Again Later', '', { progressBar: true });
                                                            }
                                                        })
                                                },
                                                cancel: function() {
                                                    this.loading = false;
                                                    this.error = false;
                                                    this.isEditing = false
                                                    this.editingEmail = this.originalEmail;
                                                }

                                            }" @click.away="cancel">
                                                <span x-show="!isEditing"
                                                    @click="isEditing = true; $nextTick(() =&gt; focus())"
                                                    class="editable" x-text="originalEmail">abcd@gmail.com</span>

                                                <span x-show="isEditing" class="editable-dom"
                                                    style="display: none;">
                                                    <input type="email" x-ref="textInput"
                                                        class="form-control col-lg-7"
                                                        :class="{ 'is-invalid': error, 'input-loading': loading }"
                                                        x-model="editingEmail" @keydown.enter="update"
                                                        @keydown.escape="cancel">
                                                    <i class="mt-1 ml-2 text-lg pointer" title="Cancel"
                                                        @click="cancel">𐄂</i>
                                                    <i class="px-1 mt-1 ml-1 text-lg font-weight-bold text-green pointer"
                                                        title="Update" @click="update">✓</i>
                                                    <small class="small mt-1">Enter to save, Esc to cancel</small>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                                <div class="dropdown" x-data="{
                                                    loading: false,
                                                    id: '827302a1-0037-4a75-9b51-418110d1ea80',
                                                    ip: '',
                                                    designationId: '236a7b1b-ee0b-48da-b293-89a5253b80e1',
                                                    last_in_time: '',
                                                    auto_punch_out_time: '',
                                                    lazySlideLoad: function(index, slide) {
                                                        if (!$.trim($('#' + index + '-827302a1-0037-4a75-9b51-418110d1ea80').html()).length) {
                                                            this.loading = index;
                                                            axios.get('https://www.kingpabel.com/attendance-management-system/partial/user-slide', {
                                                                    params: {
                                                                        id: this.id,
                                                                        slide: index,
                                                                        ip: this.ip,
                                                                        designationId: this.designationId,
                                                                        last_in_time: this.last_in_time,
                                                                        auto_punch_out_time: this.auto_punch_out_time
                                                                    }
                                                                })
                                                                .then(({ data }) = & gt;
                                                                {
                                                                    this.loading = false;
                                                                    $('#' + index + '-827302a1-0037-4a75-9b51-418110d1ea80').html(data);
                                                                    $('#carousel_827302a1-0037-4a75-9b51-418110d1ea80').carousel(slide);
                                                                })
                                                        } else {
                                                            $('#carousel_827302a1-0037-4a75-9b51-418110d1ea80').carousel(slide);
                                                        }
                                                    }
                                                }"
                                                    bis_skin_checked="1">
                                                    <button type="button"
                                                        id="dropdownMenu_827302a1-0037-4a75-9b51-418110d1ea80"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"
                                                        class="btn btn-primary btn-sm dropdown-toggle">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wrench" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        bis_skin_checked="1">
                                                        <form>
                                                            <div id="carousel_827302a1-0037-4a75-9b51-418110d1ea80"
                                                                class="carousel menu-resolver" bis_skin_checked="1">
                                                                <div class="carousel-inner"
                                                                    id="carousel-inner-827302a1-0037-4a75-9b51-418110d1ea80"
                                                                    bis_skin_checked="1">

                                                                    <div class="carousel-item active"
                                                                        bis_skin_checked="1">
                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('ip-restriction-slide', 1)"
                                                                            href="#carousel_827302a1-0037-4a75-9b51-418110d1ea80">
                                                                            <i x-show="loading == 'ip-restriction-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-ip-network-outline"></i>
                                                                            IP Restriction
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-password-slide', 2)"
                                                                            href="#carousel_827302a1-0037-4a75-9b51-418110d1ea80">
                                                                            <i x-show="loading == 'update-password-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-key-outline"></i>
                                                                            Update Password
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('update-designation-slide', 3)"
                                                                            href="#carousel_827302a1-0037-4a75-9b51-418110d1ea80">
                                                                            <i x-show="loading == 'update-designation-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-tie-outline"></i>
                                                                            Update Designation
                                                                        </a>

                                                                        <a class="dropdown-item text-danger"
                                                                            wire:click.prevent="statusUpdate(&quot;827302a1-0037-4a75-9b51-418110d1ea80&quot;, 0)"
                                                                            href="#">
                                                                            <i
                                                                                class="mdi mdi-account-off-outline"></i>
                                                                            Make Inactive</a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('last-in-time-slide', 5)"
                                                                            href="#carousel_827302a1-0037-4a75-9b51-418110d1ea80">
                                                                            <i x-show="loading == 'last-in-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-av-timer"></i> Last In
                                                                            Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('auto-punch-out-time-slide', 6)"
                                                                            href="#carousel_827302a1-0037-4a75-9b51-418110d1ea80">
                                                                            <i x-show="loading == 'auto-punch-out-time-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-timer"></i> Auto Punch
                                                                            Out Time
                                                                        </a>

                                                                        <a class="dropdown-item" data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('force-punch-in-out-slide', 7)"
                                                                            href="#carousel_827302a1-0037-4a75-9b51-418110d1ea80">
                                                                            <i x-show="loading == 'force-punch-in-out-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i class="mdi mdi-progress-clock"></i>
                                                                            Force Punch In / Out
                                                                        </a>

                                                                        <a class="dropdown-item"
                                                                            href="https://www.kingpabel.com/attendance-management-system/user/827302a1-0037-4a75-9b51-418110d1ea80/force/login">
                                                                            <i class="mdi mdi-account-convert"></i>
                                                                            Force Login
                                                                        </a>

                                                                        <div class="dropdown-divider"
                                                                            bis_skin_checked="1"></div>
                                                                        <a class="dropdown-item text-danger"
                                                                            data-slide-to="99"
                                                                            x-on:click.prevent="lazySlideLoad('delete-slide', 4)"
                                                                            href="#carousel_827302a1-0037-4a75-9b51-418110d1ea80">
                                                                            <i x-show="loading == 'delete-slide'"
                                                                                class="spinner-border spinner-border-sm"
                                                                                role="status" aria-hidden="true"
                                                                                style="display: none;"></i>
                                                                            <i
                                                                                class="mdi mdi-account-remove-outline"></i>
                                                                            Delete
                                                                        </a>
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="ip-restriction-slide-827302a1-0037-4a75-9b51-418110d1ea80"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-password-slide-827302a1-0037-4a75-9b51-418110d1ea80"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="update-designation-slide-827302a1-0037-4a75-9b51-418110d1ea80"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="delete-slide-827302a1-0037-4a75-9b51-418110d1ea80"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="last-in-time-slide-827302a1-0037-4a75-9b51-418110d1ea80"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="auto-punch-out-time-slide-827302a1-0037-4a75-9b51-418110d1ea80"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                    <div class="carousel-item required-action-section"
                                                                        id="force-punch-in-out-slide-827302a1-0037-4a75-9b51-418110d1ea80"
                                                                        bis_skin_checked="1">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row font-85-p" bis_skin_checked="1">
                            <div class="col-sm-12 col-md-5" bis_skin_checked="1">
                                <div class="liverwire-pagination-info" role="status" aria-live="polite"
                                    bis_skin_checked="1">
                                    Showing 1 to 10
                                    of
                                    177 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7" bis_skin_checked="1">
                                <div class="livewire-pagination-number" bis_skin_checked="1">
                                    <ul class="pagination" role="navigation">

                                        <li class="page-item disabled" aria-disabled="true"
                                            aria-label="« Previous">
                                            <span class="page-link" aria-hidden="true">
                                                <span class="d-none d-md-block">‹</span>
                                                <span class="d-block d-md-none">« Previous</span>
                                            </span>
                                        </li>





                                        <li class="page-item active d-none d-md-block" aria-current="page"><span
                                                class="page-link">1</span></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(2)">2</button></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(3)">3</button></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(4)">4</button></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(5)">5</button></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(6)">6</button></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(7)">7</button></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(8)">8</button></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(9)">9</button></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(10)">10</button></li>

                                        <li class="page-item disabled d-none d-md-block" aria-disabled="true"><span
                                                class="page-link">...</span></li>





                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(17)">17</button></li>
                                        <li class="page-item d-none d-md-block"><button type="button"
                                                class="page-link" wire:click="gotoPage(18)">18</button></li>


                                        <li class="page-item">
                                            <button type="button" class="page-link" wire:click="nextPage"
                                                rel="next" aria-label="Next »">
                                                <span class="d-block d-md-none">Next »</span>
                                                <span class="d-none d-md-block">›</span>
                                            </button>
                                        </li>
                                    </ul>

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






