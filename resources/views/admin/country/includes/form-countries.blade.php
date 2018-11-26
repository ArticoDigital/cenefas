<form action="{{$route}}" method="post" class="row Panel-inputs">
    @csrf
    {{empty($method)?'':$method}}
    <div class="col-16">
        <input
                type="text"
                name="name"
                value="{{old('name', optional($country)->name)}}"
                placeholder="Nombre del país"
        >
    </div>
    <article class="col-16">
        <button>{{$buttonText}}</button>
    </article>
</form>