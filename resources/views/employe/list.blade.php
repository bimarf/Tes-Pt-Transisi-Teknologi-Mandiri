@extends('layouts.backend')


@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
				    <div class="card-header card-header-border-bottom">
					<h2>Table Categories</h2>
                    </div>
                    <div>
                        <a href="{{url('employe/create')}}" class="ml-4 mb-1 btn btn-outline-primary">Add New</a>
                    </div>
				    <div class="card-body">
                    <table class="table table-bordered" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 109px;">Nama</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 184px;">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 76px;">Website</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Nama</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1" width="50">Website</th>
                                <th rowspan="1" colspan="1">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($employees as $item)    
                            <tr role="row" class="odd">
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td width="50">{{$item->company->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('employe.edit',$item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <button  onclick="return confirm('Are you sure?');"><a href="{{route('employe.delete',$item->id)}}" class="btn btn-sm btn-danger" id = "delete">Delete</a></button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        {{ $employees->links() }}
                    </div>
                 </div>
        </div>
    </div>
</div>

@stop