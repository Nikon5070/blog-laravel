@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::has('success')}}
    </div>
@endif