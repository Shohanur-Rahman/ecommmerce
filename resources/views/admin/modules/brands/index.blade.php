@extends('admin.layouts.admin')
@section('title', "Home")
@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-body">
	            <h4 class="card-title mb-2">Our Brands</h4>
	            <p class="text-muted font-14 mb-4">
	                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
	                that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
	            </p>

	            <p>
	            	<a class="btn btn-primary" href="{{route('add_brand')}}">New Brand</a>
	            </p>


                <table id="datatable-buttons" class="table table-striped dt-responsive js-exportable nowrap w-100">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Created date</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
	</div>
</div>



<script type="text/javascript">
    $(document).ready(function () {
       
    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ]
    });
    });
</script>

@endsection