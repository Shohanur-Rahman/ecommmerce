@extends('admin.layouts.admin')
@section('title', "User Edit")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit User</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                </div>


               <div class="row">
                   <div class="col-xl-6 height-card box-margin">
                       <div class="card">

                           <x-inform-users></x-inform-users>
                           <div class="card-body">
                               <h4 class="card-title mb-0">Normal Badges</h4>
                               <p class="mb-3">To create normal badges, you can add <code>.badge</code> class to badge.</p>

                               <div class="template-demo">
                                   <table class="table mb-0">
                                       <thead>
                                       <tr>
                                           <th>Item</th>
                                           <th class="text-right">Label</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <tr>
                                           <td>Primary label</td>
                                           <td class="text-right">
                                               <div class="badge badge-primary">Primary</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Info label</td>
                                           <td class="text-right">
                                               <div class="badge badge-info">Info</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Danger label</td>
                                           <td class="text-right">
                                               <div class="badge badge-danger">Danger</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Success label</td>
                                           <td class=" text-right">
                                               <div class="badge badge-success">Success</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Warning label</td>
                                           <td class=" text-right">
                                               <div class="badge badge-warning">Warning</div>
                                           </td>
                                       </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-xl-6 height-card box-margin">
                       <div class="card">
                           <div class="card-body">
                               <h4 class="card-title mb-0">Badge Pills</h4>
                               <p class="mb-3">To create pills badges, you can add <code>.badge.badge-pill</code> class to badge.</p>

                               <div class="template-demo">
                                   <table class="table mb-0">
                                       <thead>
                                       <tr>
                                           <th>Item</th>
                                           <th class="text-right">Label</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <tr>
                                           <td>Primary label</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">Primary</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Info label</td>
                                           <td class=" text-right">
                                               <div class="badge badge-info badge-pill">Info</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Danger label</td>
                                           <td class=" text-right">
                                               <div class="badge badge-danger badge-pill">Danger</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Success label</td>
                                           <td class=" text-right">
                                               <div class="badge badge-success badge-pill">Success</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Warning label</td>
                                           <td class=" text-right">
                                               <div class="badge badge-warning badge-pill">Warning</div>
                                           </td>
                                       </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
            </div>

        </div>



    </div>

@endsection
