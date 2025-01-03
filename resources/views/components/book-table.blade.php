<table border='1'>
    <tr>
        <th>カテゴリ</th>
        <th>タイトル</th>
        <th>価格</th>
        <th>更新</th>
        <th>削除</th>
    </tr>
    @foreach($books as $book)
        <tr @if($loop->even) style="background-color:#EEE" @endif>
            <td>{{ $book->category->title }}</td>
            <td>
                <a href="{{ route('book.show', $book) }}"> 
                    <!-- $bookを渡すことで、IDを取り出してくれ/admin/books/{ID}が生成される -->
                    {{ $book->title }}
                </a>
            </td>
            <td>{{ $book->price }}</td>
            <td>
                <a href="{{ route('book.edit', $book) }}"><button>更新</button></a>
            </td>
            <td>
                <form action="{{route('book.destroy', $book)}}" method="POST">
                    @csrf
                    @method('DELETE')  
                    <!-- GET,POSTメソッド以外のPUTやDELETEを使う場合は、@method('PUT')や@method('DELETE')を使う -->
                    <input type="submit" value="削除">
                </form>
            </td>
        </tr>
    @endforeach
</table>