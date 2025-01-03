<x-layouts.book-manager>
    <x-slot:title>
        書籍更新
    </x-slot:title>
    <h1>書籍更新</h1>
    @if($errors->any())
    <x-alert class="error">
        <x-error-messages :$errors />
    </x-alert>
    @endif
    <form action="{{ route('book.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <x-book-form :$categories :$authors :$book :$authorIds />
        <input type="submit" value="送信">
    </form>
</x-layouts.book-manager>