<div>
    @if(session()->has('message'))
    <div class="alert alert-success text-center ">
        {{session()->get('message')}}
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">
        {{session()->get('error')}}
    </div>
    @endif
</div>