@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="class-col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Edit channel: {{ $channel->name }}</div>

                <div class="panel-body">
                <form action="{{ route('channels.update', ['channel'=>$channel->id]) }}" method="POST">
                        {{ csrf_field () }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <input type="text" name="channel" value="{{ $channel->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                 <button class="btn btn-success" type="submit">
                                     Update channel
                                 </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
  
@endsection