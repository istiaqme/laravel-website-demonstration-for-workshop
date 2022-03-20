@extends('layouts.master')
@section('title', 'Admin | Product Categories | Ixony Engineering Limited') 
@section('content')
    

<div class="container">
    <div class="card mb-4 mt-5">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-7 mt-2 mb-0">Add A New Product Category</h2>

                    <form action="{{ url('ixony/categories/create') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        @if(session('success'))
                            <div class="contact-form-success alert alert-success mt-4">
                                <strong>Success!</strong> {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="contact-form-error alert alert-danger mt-4">
                                <strong>Error!</strong> {{ session('error') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Title</label>
                                <input type="text" data-msg-required="This Field is Required." maxlength="255" class="form-control text-3 h-auto py-2" name="title" required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label">Select Entity</label>
                                <div class="custom-select-1">
                                      <select class="form-select form-control h-auto py-2" data-msg-required="Please select an item." name="selected" required="">
                                        <option value="">Choose...</option>
                                        @foreach ($serviceWithBrands as $serviceWithBrand )
                                            <option value="{{ $serviceWithBrand->id }}">{{ $serviceWithBrand->service->title }} -> {{ $serviceWithBrand->brand->title }}</option>
                                        @endforeach
                                      </select>
                                  </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input type="submit" name="submit" class="btn btn-3d btn-success">
                            </div>
                            
                        </div>
                        

                        



                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 mt-5">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-7 mt-2 mb-0">List - {{ count($list) }}  &nbsp; items</h2>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                {{-- 5 Columns Each Row --}}
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Service
                                    </th>
                                    <th>
                                        Brand
                                    </th>
                                    
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- 5 Columns Each Row --}}
                                @foreach ($list as $key => $listItem)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td>
                                            <h4>{{ $listItem->title }}</h4>
                                        </td>
                                        <td>
                                            {{ $listItem->service->title }}
                                        </td>
                                        <td>
                                            {{ $listItem->brand->title }}
                                        </td>
                                        <td>
                                            <a 
                                                href="{{ url('/ixony/products/view/serviceAndBrand/') }}/{{ $listItem->id }}" 
                                                class="btn btn-primary">
                                                Products
                                            </a>
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

</div>
@endsection