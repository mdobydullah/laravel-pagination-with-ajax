<div id="load" style="position: relative;">
    <table class="table table-bordered">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Book Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td width="50px">
                {{$book->id}}</th>
                <td>{{$book->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

{!! $books->render() !!}
