@extends('layouts.master')
@section('title', 'Admin | Contacts | Ixony Engineering Limited') 
@section('content')
    

<div class="container">
    
    <div class="card mb-4 mt-5">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h2 class="font-weight-bold text-7 mt-2 mb-0">Messages - {{ count($list) }}  &nbsp; items</h2>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                {{-- 5 Columns Each Row --}}
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Message
                                    </th>
                                    <th>
                                        Time
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
                                            <h4>{{ $listItem->name }}</h4>
                                        </td>
                                        <td>
                                            {{ $listItem->email }}
                                        </td>
                                        <td>
                                            {{ $listItem->subject }}
                                        </td>
                                        <td>
                                            {{ $listItem->message }}
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($listItem->created_at)->diffForHumans()  }}
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