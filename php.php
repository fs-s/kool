Route::get('/book/{book}', function ($book){
    $book = Book::find($book);
    return $book;
});
