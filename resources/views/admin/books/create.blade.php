<x-layouts.book-manager>
    <x-slot:title>
        書籍登録
    </x-slot:title>
    <h1>書籍登録</h1>
    @if($errors->any())
    <x-alert class="error">
        <x-error-messages :$errors />
    </x-alert>
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
        <div>
            <label>著者</label>
            <ul>
                @foreach($authors as $author)
                    <li>
                        <label>
                        <input type="checkbox" 
                        name="author_ids[]" 
                        value="{{$author->id}}" 
                        @checked(
                            is_array(old('author_ids'))
                            &&
                            in_array($author->id, old('author_ids'))
                        )>
                        {{$author->name}}</label>
                    </li>
                @endforeach
            </ul>
        </div>
        <input type="submit" value="送信">
    </form>
</x-layouts.book-manager>