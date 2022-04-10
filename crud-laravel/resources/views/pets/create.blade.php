<h2 style="text-align: center; color:blue;">Nueva Mascota</h2>
<form action="{{url('pet')}}" method="POST">
    @csrf
    @include('pets.form')
</form>