@extends('backEnd.master')
@section('title','Blog')
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
                                <li class="breadcrumb-item" aria-current="page">Blog</li>
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
                            <h2>Blog List</h2>
                        </div>
                        <div class="col-md-8 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                            <a href="{{route('blog.create')}}" class="btn btn-info d-flex align-items-center">
                                <i class="ti ti-new-section text-white me-1 fs-5"></i> Add Blog
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="zero_config"
                                       class="table border table-striped table-bordered text-nowrap table-responsive">
                                    <thead>
                                    <!-- start row -->
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <!-- end row -->
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $row)
                                    <!-- start row -->
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{asset($row->image)}}" alt="" class="img-fluid"></td>
                                        <td>
                                            @php
                                                $categoryIds = json_decode($row->category_id, true);
                                            @endphp

                                            @if(is_array($categoryIds))
                                                @foreach($categoryIds as $categoryId)
                                                    @php
                                                        $category = \App\Models\Category::find($categoryId);
                                                    @endphp

                                                    @if($category)
                                                        <span class="badge bg-info">{{ $category->name }}</span>

                                                    @endif
                                                @endforeach
                                            @else
                                            @endif
                                        </td>
                                        <td>{{$row->name}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($row->description,20)}}</td>
                                        <td>
                                            @if($row->status == 1)
                                                <span class="badge bg-secondary">Active</span>
                                            @elseif($row->status == 2)
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="action-btn">
                                                <a href="{{route('blog.edit',$row->id)}}" class="btn btn-sm btn-primary">
                                                    <i class="ti ti-pencil fs-5"></i>
                                                </a>
                                                <a href="#"
                                                   onclick="event.preventDefault();
                                                       if (confirm('Are you sure you want to delete?'))
                                                       document.getElementById('delete-form-{{ $row->id }}').submit();"
                                                   class="btn btn-sm btn-danger text-white delete ms-2">
                                                    <i class="ti ti-trash fs-5"></i>
                                                </a>

                                                <form id="delete-form-{{ $row->id }}" action="{{ route('blog.delete', $row->id) }}" method="get" style="display: none;">
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
