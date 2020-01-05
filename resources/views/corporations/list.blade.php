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
            <td>{{$c->name_kana}}</td>
            <td>{{$c->address}}</td>
            <td>{{$c->phone_number}}</td>
            <td>{{$c->email}}</td>
        </tr>
    @endforeach
    </table>
    </body>
</html>
