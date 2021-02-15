@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="class-col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Channels</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>
                                Name
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </thead>

                        <tbody>
                            @foreach ($channels as $channel)
                                <tr>
                                    <td>{{ $channel->name }}</td>
                                    <td>
                                        <a href="{{ route('channels.edit', $channel->id) }}" class="btn btn-xs btn-info">Edit</button>
                                    </td>
                                    <td>
                                        <form action="{{ route('channels.destroy',  $channel->id ) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        
                                        <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                        </form>
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
  
@endsection