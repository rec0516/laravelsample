<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-COmpatible" content="ie=edge">
    <title>ToDO App</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/" >ToDo App</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-md-offset-3 co-md-6">
                    <nav class="panel panel-default">
                        <div class="panel-heading">フォルダを追加する</div>
                        <div class="panel-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $message)
                                    <li>{{$message}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('folders.create')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">フォルダ名</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
                                </div>
                                <div class="form-right">
                                    <button type="submit" class="btn btn-primary">送信</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
