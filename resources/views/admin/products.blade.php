@extends('layouts.master')
@section('title', 'Admin | Products | Ixony Engineering Limited') 
@section('content')
    

<div class="container">
    <div class="card mb-4 mt-5">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-7 mt-2 mb-0">Add A New Product</h2>

                    <form action="{{ url('ixony/products/serviceAndBrand/create') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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
                            <input type="hidden" name="service_id" value="{{ $serviceWithBrand->service->id }}">
                            <input type="hidden" name="brand_id" value="{{ $serviceWithBrand->brand->id }}">
                            <input type="hidden" name="category_id" value="{{ $serviceWithBrand->id }}">

                            <div class="form-group col-lg-6">
                                <label class="form-label">Selected Entity</label>
                                <div class="alert alert-primary" >
                                    <p style="color: white"> Service: <strong>{{ $serviceWithBrand->service->title }}</strong> </p>
                                    <p style="color: white"> Brand: <strong>{{ $serviceWithBrand->brand->title }}</strong></p>
                                    <p style="color: white"> Category: <strong>{{ $serviceWithBrand->title }}</strong></p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Image</label>
                                <p class="text-primary">W: 500px, H: 500px - Format: webp - Filesize: Less Than 30KB</p>
                                <input class="d-block" type="file" name="file" id="attachment" data-msg-required="This Field is Required." required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Brochure</label>
                                <input type="text" class="form-control text-3 h-auto py-2" name="link" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <label class="form-label mb-1 text-2">Details</label>
                                <p>Please use Summernote for writing details. <a target="_blank" href="https://summernote.org/">Summernote</a></p>
                                <textarea maxlength="5000" data-msg-required="Required." rows="6" class="form-control text-3 h-auto py-2" name="details" id="message" required=""></textarea>
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
                                        Image
                                    </th>
                                    <th>
                                        Details
                                    </th>
                                    <th>
                                        Brochure
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
                                            <img src="{{ asset("assets/images/uploads/") }}/{{ $listItem->image }}" alt="" style="height: 80px; width: 80px">
                                        </td>
                                        <td>
                                            {{ \Illuminate\Support\Str::limit($listItem->details, 150, '...') }}
                                        </td>
                                        <td>
                                            {{ \Illuminate\Support\Str::limit($listItem->outer_link, 25, '...') }}
                                        </td>
                                        <td>
                                            Upcoming....
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