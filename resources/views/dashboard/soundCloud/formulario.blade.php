<style>
    #margin{
        margin-top: 10px;
    }
</style>
<section>
    <div class="row">
        <div class="col-md-3">
            <h2><a href="{{route('sound.index')}}" data-toggle="tooltip" data-placement="top" title="Lista de Sessões Soud Cloud"><i class="fa fa-television" aria-hidden="true"></i></a></h2> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            @if(Session::has('error'))
            <div class="alert alert-danger">{{Session::get('error')}}</div>
            @endif
            @if(Session::has('errors'))
                @if(count($errors))
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif
            @endif

        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <h5>CRIANDO LISTA DE SOM NO SOUND CLOUD</h5>
        </div>
       
    </div>
    <div class="row">
        <div class="col-md-4">
            <label>Titilo do Som do Soud Cloud</label>
            {!!Form::text('titulo' , null,['class'   =>  'form-control'] )!!}
        </div>
        <div class="col-md-5">
            <label>Frame do Sound Cloud</label>
            {!!Form::text('frame' , null,['class'   =>  'form-control'] )!!}
        </div>
         <div class="col-md-3">
            <label>Status</label>
            {!!Form::select('status' , [false    =>  'Inativo', true  =>  'Ativo'],null,['class'   =>  'form-control'] )!!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            {!!Form::submit('Salvar' , ['class' =>  'btn btn-primary' , 'id'    =>  'margin'])!!}
        </div>
    </div>
</section>