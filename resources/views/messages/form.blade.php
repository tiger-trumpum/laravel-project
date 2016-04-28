{!! Form::hidden('user_id', 1) !!}

<div class="form-group">
    {!! Form::label('topic', 'Topic') !!}
    {!! Form::text('topic', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Publish On') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Add/Change Avatar') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::hidden('image_name', $name, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::hidden('email', $email, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])!!}
</div>
