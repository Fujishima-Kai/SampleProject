<html>
    <body>
    <h1>取引先一覧表示</h1>

    <div class="row">
    </div>
    <table class="table table-striped">
    @foreach($corporations as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            <td>{{$c->address}}</td>
            <td>{{$c->phone_number}}</td>
            <td>{{$c->email}}</td>
            <td><a href="/corporation/edit{{$c->id}}" class="btn btn-primary btn-sm">編集</a></td>
            <td><a href="/corporation/delete{{$c->id}}" class="btn btn-primary btn-sm">削除</a></td>
        </tr>
    @endforeach
    </table>
    </body>
</html>
