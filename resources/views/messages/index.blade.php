@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

<div class="row">
        <div class="col-xs-12"></div>
        <div class="col-sm-offset-2 col-sm-6"></div>
        <div class="col-md-offset-2 col-md-6"></div>
        <div class="col-lg-offset-3 col-lg-3"></div>

    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>
                        <td>{{ $message->title }}</td>
                        <td>{{ $message->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif
    {!! link_to_route('messages.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}

</div>
    </div>

@endsection