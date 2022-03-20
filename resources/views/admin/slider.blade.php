@extends('layouts.master')
@section('title', 'Admin | Slider Items | Ixony Engineering Limited') 
@section('content')
    

<div class="container">
    <div class="card mb-4 mt-5">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-7 mt-2 mb-0">Add A New Slider Item</h2>

                    <form action="{{ url('ixony/sliders/create') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
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
                                <label>Attachment</label>
                                <p class="text-primary">W: 2100px, H: 500px - Format: webp</p>
                                <input class="d-block" type="file" name="file" id="attachment" data-msg-required="This Field is Required." required="">
                            </div>
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
                                        Image
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
                                            <h4><img src="{{ asset("assets/images/uploads/") }}/{{ $listItem->image }}" alt="" style="height: 120px; width: 500px"></h4>
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