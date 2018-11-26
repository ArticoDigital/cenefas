<form action="{{route('category.store')}}" method="post" class="row m-t-20">
    @csrf
    <h4 class="m-r-20 ">Crear una nueva categoría : </h4>
    <label class="m-r-8 col-8" for=""><input type="text" name="name" placeholder="Nombre "></label>
    <button>Crear</button>
</form>