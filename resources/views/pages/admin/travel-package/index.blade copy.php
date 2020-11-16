@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>  
  <a href="{{ route('travel-package.create')}}" class="btn btn-sm btn-success shadow-sm">
  <i class="fas fa-plus fa-sm text-white-100"></i> Tambah Paket Travel
  </a>
</div>

<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>About</th>
                    <th>Featured Event</th>
                    <th>Language</th>
                    <th>Foods</th>                  
                    <th>Departure Date</th>
                    <th>Duration</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->about }}</td>
                        <td>{{ $item->featured_event }}</td>
                        <td>{{ $item->language }}</td>
                        <td>{{ $item->foods }}</td>                     
                        <td>{{ $item->departure_date }}</td>
                        <td>{{ $item->duration }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>                            
                            </a>  
                            <form action="{{ route('travel-package.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf 
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>                          
                        </td>
                    </tr>
                @empty
                    <tr>
                      <td colspan="7" class="text-center">
                        Belum Ada Data Paket Travel
                      </td>
                    </tr>
                @endforelse                
            </tbody>
            </table>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->
@endsection
