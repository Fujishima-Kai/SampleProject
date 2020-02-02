<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="固定サイドバーとナビゲーションバーを備えた基本的な管理ダッシュボードシェル。">
<!-- OGP -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@cccabinet">
	<meta property="og:site_name" content="Bootstrap4移行ガイド">
	<meta property="og:title" content="ダッシュボードの実例～Bootstrap4移行ガイド">
	<meta property="og:url" content="https://cccabinet.jpn.org/bootstrap4/sample/dashboard">
	<meta property="og:type" content="article">
	<meta property="og:description" content="固定サイドバーとナビゲーションバーを備えた基本的な管理ダッシュボードシェル。">
	<meta property="fb:app_id" content="2270152383309485">
	<meta property="og:image" content="https://cccabinet.jpn.org/bootstrap4/files/example_files/8/dashboard.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="960">
	<meta property="og:image:height" content="600">
	<title>法人管理画面</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9/build/styles/github.min.css">
	<link rel="stylesheet" href="https://cccabinet.jpn.org/bootstrap4/css/samples.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5/css/all.min.css">
<style>
body {font-size: .875rem;}.feather {width: 16px;height: 16px;vertical-align: text-bottom;}
/* * サイドバー */.sidebar {position: fixed;top: 0;bottom: 0;left: 0;z-index: 100; 
/* ナビゲーションバーの背面 */padding: 48px 0 0;
/* ナビゲーションバーの高さ */box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);}.sidebar-sticky {position: relative;top: 0;height: calc(100vh - 48px);padding-top: .5rem;overflow-x: hidden;overflow-y: auto; 
/* ビューポートがコンテンツより短い場合、スクロール可能なコンテンツ */}@supports ((position: -webkit-sticky) or (position: sticky)) {.sidebar-sticky {position: -webkit-sticky;position: sticky;}}.sidebar .nav-link {font-weight: 500;color: #333;}.sidebar .nav-link .feather {margin-right: 4px;color: #999;}.sidebar .nav-link.active {color: #007bff;}.sidebar .nav-link:hover .feather,.sidebar .nav-link.active .feather {color: inherit;}.sidebar-heading {font-size: .75rem;text-transform: uppercase;}
/* * コンテンツ */[role="main"] {padding-top: 133px;
/* 固定ナビゲーションバーの余白 */}@media (min-width: 768px) {[role="main"] {padding-top: 48px; /* 固定ナビゲーションバーの余白 */}}/* 
* ナビゲーションバー */.navbar-brand {padding-top: .75rem;padding-bottom: .75rem;font-size: 1rem;background-color: rgba(0, 0, 0, .25);box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);}.navbar .form-control {padding: .75rem 1rem;border-width: 0;border-radius: 0;}.form-control-dark {color: #fff;background-color: rgba(255, 255, 255, .1);border-color: rgba(255, 255, 255, .1);}.form-control-dark:focus {border-color: transparent;box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);}
.container {margin-right: 50px;　padding-top: 100px;} 
</style>
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
</head>

<body>
	@if(Session::has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
		<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">familiar</a>
			<ul class="navbar-nav px-3">
			<form method="GET" action="ItemController@index">
                    <input type="text" name="keyword">
                    <input type="submit" value="商品検索">
                </form>
				<li class="nav-item text-nowrap">
                  <a href="/item/add"　class="navbar-brand">ad</a>
				</li>
			</ul>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<nav class="col-md-2 d-none d-md-block bg-light sidebar">
					<div class="sidebar-sticky">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active" href="/corporation/admin">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
									法人管理 <span class="sr-only">(現位置)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
									受注リスト
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
									出荷業務
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/corporation">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
									法人リスト編集
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
									売上管理
								</a>
							</li>
							</li>
						</ul>

					</div>
				</nav>
			</div>
		</div>
	<!-- @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
        <h1></h1>
    @endif -->


    <div class="container" style="padding-top: 50px">
        <div class="row justify-content-left">
            @foreach ($items as $item)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">品番：{{ $item->number }}</div>
                    <div class="card-body">
                        <td>品名：{{ $item->name }}</td><br>
                        <td>サイズ：{{ $item->size }}</td><br>
                        <td>カラー：{{ $item->color }}</td><br>
                        <td>単価：{{ $item->amount }}</td><br>
                    </div>
                    @auth
                    <form method="POST" action="{{action('ItemController@chooseQuantity', ['id' => $id])}}" class="form-inline m-1">
                        {{CSRF_field()}}
                        <label>数量<span class="required"></span></label><br>
                        <input type="number" name="quantity" class="form-control col-md-2 mr-1">
                        <label>納入率<span class="required"></span>（％）</label>
                        <input type="float" name="markup_ratio" class="form-control col-md-2 mr-1">
                        </select>
                        <input type="hidden" name="item_id" value="{{ $item->id}}">
                        <button type="submit" class="btn btn-primary col-md-6">出荷リストに入れる</button>
                    </form>
                    @endauth
                </div>
            </div>
            @endforeach
			<div>
				<button type="submit" style="text-align: center">出荷リストに進む</button>
			</div>
		</div>
        <div class="row justify-content-center">
		{{ $items->appends(['keyword' => Request::get('keyword')])->links() }}
        </div>
    </div>
    
</body>

