@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    showです。
                    {{ $contact->your_name }}
                    {{ $contact->title }}
                    {{ $contact->email }}
                    {{ $contact->url }}
                    {{ $contact->gender }}
                    {{ $contact->age }}
                    {{ $contact->contact }}
                    <form action="" method="GET">
                        @csrf

                        <input type="submit" class="btn btn-primary" value="変更する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
