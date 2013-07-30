<div class="row-fluid">
    <div class="span12">

        {{ Form::open(array('class' => 'form-signin')) }}

        <h2>Create time</h2>
        {{ Form::text('name',Input::old('name'), array('class' => 'input-block-level', 'placeholder' => 'Description of task')) }}
        {{ $errors->first('name') }}
        {{ Form::text('hours','', array('class' => 'input-block-level', 'placeholder' => 'Hours')) }}
        {{ $errors->first('hours') }}
        {{ Form::select('project', $projects) }}
        {{ Form::button('Create', array('class' => 'btn btn-large btn-primary', 'type' => 'submit')) }}
        {{ Form::close() }}
    </div>
</div>