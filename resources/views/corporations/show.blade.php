<html>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/corporations/{{ $corporations->id }}">{{ $corporations->name }}</a>
                    </div>
                    <div class="card-body">
                        {{ $item->amount }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>