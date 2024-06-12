<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フリマアプリ</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">フリマアプリ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">ホーム</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">商品一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.create') }}">商品出品</a>
                </li>
                <!-- 他のナビゲーション項目を追加 -->
            </ul>
            <!-- ログアウトボタン -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link nav-link">ログアウト</button>
            </form>
        </div>
    </nav>
    
    <div class="container mt-4">
        <h1>商品一覧</h1>
        <p>ここに商品一覧を表示するコンテンツを追加します。</p>
        
        <div class="card mt-4">
            <div class="card-header">商品一覧</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>商品名</th>
                            <th>説明</th>
                            <th>価格</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">ユーザー登録</div>
        <div class="card-body">
            <p>アカウントをお持ちでない場合は、以下からユーザー登録してください。</p>
            <a href="{{ route('register') }}" class="btn btn-primary">ユーザー登録</a>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
