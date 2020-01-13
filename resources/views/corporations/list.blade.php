<html>
    <body>
    <h1>取引先一覧表示</h1>

    <div class="row">
    </div>
    <table class="table table-striped">
    @foreach($corporations as $c)
        <tr>
            <td>{{$c->name}}</td>
            <td>{{$c->address}}</td>
            <td>{{$c->phone_number}}</td>
            <td>{{$c->email}}</td>
            <td><a href="/corporation/edit{{$c->id}}" class="btn btn-primary btn-sm">編集</a></td>
            <td>
            <form method="post" action="{{ url('corporation/delete'.$c->id)}}">
            {{ csrf_field() }}
            <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
            </form>
            </td>
        </tr>
    @endforeach
    </table>
    </body>
</html>
