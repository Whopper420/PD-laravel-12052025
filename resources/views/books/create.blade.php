<h1>New book</h1>

<form action="/books/store" method="post">
    @csrf
    <input type="text" placeholder="title goes here">
    <input type="text" placeholder="author goes here">
    <input type="date" placeholder="date goes here">
    <input type="submit" value="Create">
</form>