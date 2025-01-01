<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book登録</title>
</head>
<body>
    <h1>書籍登録</h1>
    @if($errors->any())
    <x-error-messages :errors="$errors" />
    @endif
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div>
            <label>カテゴリ</label>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @selected($category->id == old('category_id'))>{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="title">タイトル</label>
           <input type="text" name="title" placeholder="タイトル" id="title" value="{{old('title')}}">
        </div>
        <div>
            <label for="price">価格</label>
            <input type="text" name="price" placeholder="価格" id="price" value="{{old('price')}}">
        </div>
        <input type="submit" value="送信">
    </form>
    
</body>
</html>