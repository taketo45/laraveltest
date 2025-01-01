<table border='1'>
    <tr>
        <th>カテゴリ</th>
        <th>タイトル</th>
        <th>価格</th>
        <th>更新</th>
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
        </tr>
    @endforeach
</table>