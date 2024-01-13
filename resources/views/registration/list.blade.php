@extends('layouts.app')
@section('title', 'Registration List')

@section('content')
<div class="container">
    <div class="row">
        <div class="grid_12">
            <h2 class="v3">Conference Registration List</h2>

            <div style="padding-top: 50px;">
                <table style="width: 100%;">
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Designation</th>
                        <th>Company</th>
                        <th>Tel #</th>
                        <th>Mob #</th>

                        <th>IDPA</th>
                        <th>LDPA</th>
                        <th>IDOA</th>
                        <th>LDOA</th>
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

                        <td>{{ $reg->intl_delegate_physical_id }}</td>
                        <td>{{ $reg->local_delegate_physical_id }}</td>
                        <td>{{ $reg->intl_delegate_online_id }}</td>
                        <td>{{ $reg->local_delegate_online_id }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@stop