@extends('layouts.app')
@section('title', 'Sponsorship List')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Sponsorship List</h2>

            <div style="padding-top: 50px;">
                <table style="width: 100%;">
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Designation</th>
                        <th>Company</th>
                        <th>Telephone Number</th>
                        <th>Mobile Numbers</th>

                        
                    </tr>
                    @foreach ($registration as $reg)
                    <tr>
                        <td>{{ date('m/d/Y',strtotime($reg->created_at))  }}</td>
                        <td>{{ $reg->name }}</td>
                        <td>{{ $reg->email }}</td>
                        <td>{{ $reg->designation }}</td>
                        <td>{{ $reg->company }}</td>
                        <td>{{ $reg->telephone_number }}</td>
                        <td>{{ $reg->mobile_number }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@stop