<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    @if($errors -> any())
        <x-alert class="error">
            <x-error-message :errors => "$errors" />
        </x-alert>
    @endif
    <form action="{{route('admin.create')}}" method="POST">
        @csrf
        <div>
            <div>
                ログインID: <input type="text" name="login_id">
            </div>
            <div>
                パスワード: <input type="password" name="password">
            </div>
        </div>
        <div>
            <input type="submit" value="ログイン">
        </div>
    </form>
</body>
</html>