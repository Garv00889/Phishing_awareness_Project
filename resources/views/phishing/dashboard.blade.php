@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Phishing Logs</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Email</th>
                <th>IP Address</th>
                <th>User Agent</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach($logs as $log)
            <tr>
                <td>{{ $log->email }}</td>
                <td>{{ $log->ip_address }}</td>
                <td>{{ $log->user_agent }}</td>
                <td>{{ $log->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection