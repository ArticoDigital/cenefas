<div class="m-t-40"><h4>Categorías</h4></div>
<div class="table-container">
    <table class="m-t-0">
        <thead>
        <tr>
            <th>Nombre</th>
            <th class="is-text-center">Editar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($country->categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td class="row justify-center Panel-edit">
                    <a
                            data-url="{{route('category.update', $category->id)}}"
                            data-name="{{$category->name}}"
                            class="Category-updateUrl">
                        <i class="fas fa-user-edit"></i>
                    </a>
                    <form action="{{route('category.destroy',$category->id)}}" method="post" class="deleteElement">
                        @csrf @method('DELETE')
                        <a href=""><i class="fas fa-user-times"></i></a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>