<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍一覧</title>
</head>
<body>
    <h1>書籍一覧</h1>
    @if(session('message'))
        <div style="color:blue">
            {{ session('message') }}
        </div>
    @endif
    <a href="{{ route('book.create') }}">追加</a>
    <x-book-table :$books />

</body>
</html>
