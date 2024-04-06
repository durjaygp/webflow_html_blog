@extends('backEnd.master')
@section('title','Book')
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">@yield('title')</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted " href="{{route('admin.index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Category</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="{{asset('back')}}/assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-content searchable-container list">
            <!-- --------------------- start Contact ---------------- -->
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-4 ">
                          <h2>Book List</h2>
                      </div>
                      <div class="col-md-8 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                          <a href="{{route('book.create')}}" class="btn btn-info d-flex align-items-center">
                              <i class="ti ti-new-section text-white me-1 fs-5"></i> Add Book
                          </a>
                      </div>
                  </div>
              </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="zero_config"
                                       class="table border table-striped table-bordered text-nowrap">
                                    <thead>
                                    <!-- start row -->
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Hard <br> Copy <br> Price</th>
                                        <th>Shipping <br> Price</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Home <br>Page <br> Featured</th>
                                        <th>Action</th>
                                    </tr>
                                    <!-- end row -->
                                    </thead>
                                    <tbody>
                                    @foreach($books as $row)
                                    <!-- start row -->
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{asset($row->image)}}" alt="" class="img-fluid"></td>
                                        <td>{{\Illuminate\Support\Str::limit($row->name,20)}}</td>
                                        <td>{{$row->price}}</td>
                                        <td>{{$row->print_price}}</td>
                                        <td>{{$row->shipping_price}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($row->description,20)}}</td>
                                        <td>
                                            @if($row->status == 1)
                                                <div class="text-success">
                                                    Active
                                                </div>
                                            @elseif($row->status == 2)
                                                <span class="text-danger">
                                                    Inactive
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($row->is_featured == 1)
                                                <div class="text-success">
                                                    Active
                                                </div>
                                            @elseif($row->is_featured == 2)
                                                <span class="text-danger">
                                                    Inactive
                                                </span>
                                            @endif

                                        </td>

                                        <td>
                                            <div class="action-btn">
                                                <a href="{{route('book.edit',$row->id)}}" class="btn btn-sm btn-primary">
                                                    <i class="ti ti-pencil fs-5"></i>
                                                </a>
                                                <a href="{{ route('book.delete', $row->id) }}"
                                                   onclick="event.preventDefault();
                                                       if (confirm('Are you sure you want to delete?'))
                                                       document.getElementById('delete-form-{{ $row->id }}').submit();"
                                                   class="btn btn-sm btn-danger text-white delete ms-2">
                                                    <i class="ti ti-trash fs-5"></i>
                                                </a>

                                                <form id="delete-form-{{ $row->id }}" action="{{ route('book.delete', $row->id) }}" method="get" style="display: none;">
                                                    @csrf
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end row -->
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
