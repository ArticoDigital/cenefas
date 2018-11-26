@if(Session::has('message'))
    <div class="alert-success">{{Session::get('message')}}</div>
@endif