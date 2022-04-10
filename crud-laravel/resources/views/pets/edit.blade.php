<h2>Editar dato de mascotas</h2>
<form action="{{url('/pet/' .$pet->id)}}" method="POST">
    @csrf
    {{method_field('PUT')}}
    @include('pets.form')

</form>