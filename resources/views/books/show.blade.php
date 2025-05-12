<h2>{{ $singleBook->title }}</h2>
<h3>{{ $singleBook->author }}</h3>
<p>{{ $singleBook->released_at }}</p>
<form action="/books/{{$singleBook->id}}/delete" method="post">
    @csrf
    @method('delete')
    <button>delete</button>
</form>
<a href="/books">All books</a>