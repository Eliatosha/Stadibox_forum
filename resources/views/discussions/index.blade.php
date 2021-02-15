@extends('layouts.app')

@section('content')

@foreach ($discussions as $discussion)
<div class="card">

    @include('partials.discussion-header')

    <div class="card-body">
        <div class="text-center">
            <strong>{{ $discussion->Title}}</strong>
        </div>
    </div>
</div>    
@endforeach
{{ $discussions->appends(['channel' => request()->query('channel') ])->links() }}
  
@endsection