<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トレーニングHP</title>
</head>
<body>
  <h1>書籍登録</h1>
  <form action="{{route('admin.book.store')}}">
    @csrf
    <div>
      <label>カテゴリ</label>
      <select name="category_id">
        @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div>
      <label>タイトル</label>
      <input type="text" name="title" placeholder="タイトル">
    </div>
    <div>
      <label>価格</label>
      <input type="text" name="price" placeholder="価格">
    </div>
    <input type="submit" value="送信">
  </form>
</body>
</html>