 @extends('layouts.admin')
 @section('content')
 <div class="row">
     <div class="col-md-12 grid-margin">
         <div class="card">
             <div class="card-body sticky-breadcrumb">
                 <div class="bcca-breadcrumb float-left">
                     <div class="bcca-breadcrumb-item">Leave</div>
                     <div class="bcca-breadcrumb-item">
                         <a href="dashboard">Dashboard</a>
                     </div>
                 </div>

                 <div class="float-right breadcrumb-external-button">
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div wire:initial-data="{&quot;id&quot;:&quot;iSHbnJIc1CYGB4AybUqU&quot;,&quot;name&quot;:&quot;leave-list&quot;,&quot;redirectTo&quot;:false,&quot;locale&quot;:&quot;en&quot;,&quot;events&quot;:[&quot;destroy&quot;,&quot;refresh&quot;],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;readyToLoad&quot;:false,&quot;pagination&quot;:10,&quot;dateRange&quot;:null,&quot;page&quot;:1,&quot;filter&quot;:[]},&quot;children&quot;:[],&quot;checksum&quot;:&quot;2e4d188799b0cf0d0d56ad65976e607c77181dc6d289f2032e00a7d17e86e263&quot;}" wire:id="iSHbnJIc1CYGB4AybUqU" class="row" wire:init="$set('readyToLoad', 'true')">
     <div class="col-lg-12 grid-margin">
         <div class="row">
             <div class="col-lg-12 grid-margin">
                 <div class="card">
                     <div class="card-body">
                         <div class="table-responsive">
                             <table id="users-table" class="table table-bordered table-hover">
                                 <thead class="thead-light">
                                     <tr>
                                         <th>
                                             <label for="tetx">Emp-ID</label>
                                         </th>
                                         <th>
                                             <label for="tetx">Emp-Name</label>
                                         </th>

                                         <th>
                                             <label for="tetx">Leave-Date</label>
                                         </th>

                                         <th>
                                             <label for="tetx">Total Leave</label>
                                         </th>
                                         <th>
                                             <label for="tetx">Status</label>
                                         </th>



                                         <th>Actions</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($users as $user)
                                     <tr>
                                         <td>{{ $user->emp_id }}</td>
                                         <td>{{ $user->name }}</td>
                                         <td>
                                             @forelse($user->leaves as $leave)
                                             {{ $leave->start_date }} - {{ $leave->end_date }} <br>
                                             @empty
                                             N/A
                                             @endforelse
                                         </td>
                                         {{-- Get total leave days for this user --}}
                                         <td>
                                             {{ $leaves->where('emp_id', $user->emp_id)->sum('days') }}
                                         </td>

                                         <td>
                                             @if ($user->status)
                                             <span class="badge badge-success">Active</span>
                                             @else
                                             <span class="badge badge-danger">Inactive</span>
                                             @endif
                                         </td>




                                         <td>
                                             <a href="" class="btn btn-sm btn-primary">
                                                 <i class="fa fa-edit"></i>
                                             </a>

                                             <form action="" method="POST" style="display:inline;">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                     <i class="fa fa-trash"></i>
                                                 </button>
                                             </form>
                                         </td>
                                     </tr>
                                     @endforeach
                                 </tbody>

                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         {{-- DataTables --}}
         <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
         <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
         <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
         {{-- <div class="card">
             <div class="card-body">
                 <h4 class="card-title"></h4>
                 <div class="fluid-container">
                     <div class="row font-85-p" wire:ignore>
                         <div class="col-sm-12 col-lg-3">
                             <label>
                                 Show
                                 <select aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm width-auto" wire:model="pagination">
                                     <option value="10">10</option>
                                     <option value="25">25</option>
                                     <option value="50">50</option>
                                     <option value="100">100</option>
                                 </select>
                                 entries
                             </label>
                         </div>

                         <div class="col-sm-12 col-lg-6 text-right">
                             <select aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm width-auto col-lg-4" x-data="{users:[]}" x-init="() => {axios.get('https://www.kingpabel.com/attendance-management-system/user/json').then(({data})=> users=data.data)}" wire:model.lazy="filter.user_id">
                                 <option value="">--- User ---</option>
                                 <template x-for="(user, index) in users" :key="index">
                                     <option :value="user.id" x-text="user.name">
                                     </option>
                                 </template>
                             </select>

                             <select aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm width-auto col-lg-4" x-data="{categories:[]}" x-init="() => {axios.get('https://www.kingpabel.com/attendance-management-system/leave/category/json').then(({data})=>categories=data.data)}" wire:model.lazy="filter.leave_category_id">
                                 <option value="">--- Category ---</option>
                                 <template x-for="(category, index) in categories" :key="index">
                                     <option :value="category.id" x-text="category.name">
                                     </option>
                                 </template>
                             </select>

                             <select aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm width-auto col-lg-4" x-data="{statuses:[]}" x-init="() => {axios.get('https://www.kingpabel.com/attendance-management-system/leave/status/json').then(({data})=>statuses=data.data)}" wire:model.lazy="filter.leave_status_id">
                                 <option value="">--- Status ---</option>
                                 <template x-for="(status, index) in statuses" :key="index">
                                     <option :value="status.id" x-text="status.name">
                                     </option>
                                 </template>
                             </select>
                         </div>

                         <div class="col-sm-12 col-lg-3 text-right">
                             <input type="text" class="form-control livewire-table-input-search" placeholder="Search by Date Range..." aria-controls="example">
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-lg-12 table-responsive" wire:loading>

                             <table class="table table-bordered with-drop-button">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>User</th>
                                         <th>Category</th>
                                         <th>Status</th>
                                         <th>Date</th>
                                         <th>Description</th>
                                         <th>Options</th>
                                     </tr>
                                 </thead>
                                 <tbody class="loading-transition-background">
                                     <tr>
                                         <td><span class="loading-transition">201</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">____</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">____________________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                     <tr>
                                         <td><span class="loading-transition">262</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">_____</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">______________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                     <tr>
                                         <td><span class="loading-transition">106</span></td>
                                         <td><span class="loading-transition">___________</span></td>
                                         <td><span class="loading-transition">____</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">________________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                     <tr>
                                         <td><span class="loading-transition">844</span></td>
                                         <td><span class="loading-transition">________</span></td>
                                         <td><span class="loading-transition">____</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">___________________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                     <tr>
                                         <td><span class="loading-transition">503</span></td>
                                         <td><span class="loading-transition">________</span></td>
                                         <td><span class="loading-transition">_______</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">___________________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                     <tr>
                                         <td><span class="loading-transition">584</span></td>
                                         <td><span class="loading-transition">________</span></td>
                                         <td><span class="loading-transition">____</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">___________________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                     <tr>
                                         <td><span class="loading-transition">102</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">_______</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">_________________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                     <tr>
                                         <td><span class="loading-transition">54</span></td>
                                         <td><span class="loading-transition">_________</span></td>
                                         <td><span class="loading-transition">_______</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">__________________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                     <tr>
                                         <td><span class="loading-transition">92</span></td>
                                         <td><span class="loading-transition">___________</span></td>
                                         <td><span class="loading-transition">______</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">____________________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                     <tr>
                                         <td><span class="loading-transition">155</span></td>
                                         <td><span class="loading-transition">____________</span></td>
                                         <td><span class="loading-transition">______</span></td>
                                         <td><span class="loading-transition">__________</span></td>
                                         <td><span class="loading-transition">__________</span> </td>
                                         <td><span class="loading-transition">______________</span></td>
                                         <td><span class="btn btn-sm loading-transition">_____</span></td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <div class="col-lg-12 table-responsive" wire:loading.remove>

                             <table class="table table-bordered with-drop-button">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>User</th>
                                         <th>Category</th>
                                         <th>Status</th>
                                         <th>Date</th>
                                         <th>Description</th>
                                         <th>Options</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                 </tbody>
                             </table>

                         </div>
                     </div>

                 </div>
             </div>
         </div> --}}
     </div>
 </div>
 <script>
     $(document).ready(function() {
         $('#users-table').DataTable();


         // Open modal and fill data for edit
         $('.editUserBtn').click(function() {
             let id = $(this).data('id');

             // Use singular 'user' to match Laravel route
             $.get('/user/' + id + '/edit', function(res) {
                 $('#userModalTitle').text('Edit User');
                 $('#userForm').attr('action', '/user/' + id); // singular 'user'
                 $('#formMethod').val('PUT');

                 $('input[name="name"]').val(res.user.name);
                 $('input[name="email"]').val(res.user.email);
                 $('select[name="designation_id"]').val(res.user.designation_id);
                 $('select[name="status"]').val(res.user.status);

                 $('.role-checkbox').prop('checked', false);
                 res.roles.forEach(r => {
                     $('input[value="' + r + '"]').prop('checked', true);
                 });

                 $('#imagePreview').attr('src', res.user.profile_image_url || '');

                 $('#userModal').modal('show');

                 // Auto-expand More Options when editing
                 $('#advancedSettings').addClass('show');
             });
         });

         // AJAX form submit
         $('#saveUserBtn').click(function(e) {
             e.preventDefault();
             let form = $('#userForm')[0];
             let formData = new FormData(form);
             let actionUrl = $('#userForm').attr('action');

             if ($('#formMethod').val() === 'PUT') {
                 formData.append('_method', 'PUT');
             }

             $.ajax({
                 url: actionUrl
                 , type: 'POST'
                 , data: formData
                 , processData: false
                 , contentType: false
                 , success: function(res) {
                     alert(res.message);
                     $('#userModal').modal('hide');
                     location.reload();
                 }
                 , error: function(err) {
                     alert('Validation error!');
                 }
             });
         });


         // AJAX form submit
         $('#saveUserBtn').click(function(e) {
             e.preventDefault();
             let form = $('#userForm')[0];
             let formData = new FormData(form);
             let actionUrl = $('#userForm').attr('action');

             if ($('#formMethod').val() === 'PUT') {
                 formData.append('_method', 'PUT');
             }

             $.ajax({
                 url: actionUrl
                 , type: 'POST'
                 , data: formData
                 , processData: false
                 , contentType: false
                 , success: function(res) {
                     alert(res.message);
                     $('#userModal').modal('hide');
                     location.reload();
                 }
                 , error: function(err) {
                     alert('Validation error!');
                 }
             });
         });

         // Image preview
         $('#profileImage').change(function() {
             const [file] = this.files;
             if (file) {
                 $('#imagePreview').attr('src', URL.createObjectURL(file));
             }
         });
     });

 </script>
 @endsection
