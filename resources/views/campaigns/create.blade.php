@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Create New Campaign</h2>

    <form action="{{ route('campaigns.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Subject:</label>
            <input type="text" name="subject" class="form-control" required>
        </div>

        <div class="form-group mt-2">
            <label>Email Body:</label>
            <textarea name="email_body" class="form-control" rows="5" required></textarea>
        </div>

        <div class="form-group mt-2">
            <label>Phishing Link:</label>
            <input type="text" name="phishing_link" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Create Campaign</button>

        <a href="{{ route('campaigns.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
</div>
@endsection