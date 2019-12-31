    <h1>取引先一覧表示</h1>

    <div class="row">
    </div>

    <!-- table -->
    <table class="table table-striped">

    <!-- loop -->
    @foreach($corporation as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            <td>{{$c->address}}</td>
            <td>{{$c->phone_number}}</td>
            <td>{{$c->email}}</td>
        </tr>
    @endforeach
