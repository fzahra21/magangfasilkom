<div class="flashmessage">
    @foreach (['danger', 'warning', 'info'] as $msg)
        @if(Session::has('alert-'.$msg))
            <p class="alert alert-{{$msg}}">
                {{ Session::get('alert-'.$msg) }} <a href="#" class="close" data-dismiss="alert" aria-lable="close">&times;</a>
            </p>
        @endif
    @endforeach
</div>

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
