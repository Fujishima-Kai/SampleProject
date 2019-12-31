<!doctype html>
<html>
<body>
  <p>取引先一覧</p>
  <ul>
    @foreach ($corporation as $c)
    <h2>
    {{ $c->name }}
    </h2>
      <li>{{ $c->name }} {{ $c->name_kana }}</li>
    @endforeach
  </ul>
</body>
</html>