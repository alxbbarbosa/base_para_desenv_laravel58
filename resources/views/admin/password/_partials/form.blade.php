<div class="form-group">
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha']) !!}
</div>
<div class="form-group">
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmar senha']) !!}
</div>
<div class="form-group">
    <a class="btn btn-primary" href="{{ url()->previous() }}" style="display: inline-block"><i class="fas fa-fw fa-sign-out-alt"></i>&nbsp;&nbsp;Cancela</a>
    {!! Form::button("<i class='fas fa-fw fa-check'></i>&nbsp;&nbsp;Salvar", ['type' => 'submit' ,'class' => 'btn btn-success']) !!}
</div>