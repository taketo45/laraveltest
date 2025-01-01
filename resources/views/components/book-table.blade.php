<table border='1'>
    <tr>
        <th>カテゴリ</th>
        <th>タイトル</th>
        <th>価格</th>
    </tr>
    @foreach($books as $book)
        <tr @if($loop->even) style="background-color:#EEE" @endif>
            <td>{{ $book->category->title }}</td>
            <td>
                <a href="{{ route('book.show', ['book' => $book]) }}">
                    {{ $book->title }}
                </a>
            </td>
            <td>{{ $book->price }}</td>
        </tr>
    @endforeach
</table>