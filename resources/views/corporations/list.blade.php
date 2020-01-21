<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
		body {
			padding-top: 50px;
			background-color: lightgray;
		}

		.starter-template {
			padding: 40px 15px;
			background-color: white;
		}
	</style>
    <body>
    <nav class="navbar navbar-dark bg-dark">
  <a href="/corporation/create" class="navbar-brand">新規登録</a>
</nav>
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

            <td><a href="/item/index" class="btn btn-primary btn-sm">出荷</a></td>
            <td>
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
