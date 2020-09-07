@extends('admin.layouts.admin')
@section('title', "Home")
@section('content')

<div class="row">
    @if(session()->get("message"))
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>{{session()->get("message")}}</strong>
        </div>
    </div>
    @endif
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
                        @foreach($brands as $aBrand)
                        <tr>
                            <td>{{$aBrand->id}}</td>
                            <td>{{$aBrand->name}}</td>
                            <td><img src="{{asset($aBrand->image)}}" class="table-image"></td>
                            <td>{{$aBrand->created_at->format('d F Y')}}</td>
                            <td>
                                <a class="btn btn-outline-primary table-btn btn-sm" href="{{route('edit_brand', $aBrand->id)}}" title="Edit"><i class="zmdi zmdi-edit"></i></a>
                                <a class="btn btn-outline-danger table-btn btn-sm" href="{{route('delet_brand', $aBrand->id)}}" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                            </td>
                        </tr>
                        @endforeach
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