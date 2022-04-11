<div>
    <h1>CRUD</h1>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <table>
        <thead>
            <tr>
                <td>id:</td>
                <td>Name:</td>
                <td>age:</td>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{$pet->id}}</td>
                <td>{{$pet->name}}</td>
                <td>{{$pet->age}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
