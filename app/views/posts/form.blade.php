<div class="form-group">
        {{ Form::label('title', 'Post Title') }}
        {{ Form::text('title', Input::old('title'), array('placeholder' => 'Enter Post Title', 'class' => 'form-control')) }}
      </div>
      <div class="form-group">
        {{ Form::label('body', 'Post Body') }}
        {{ Form::textarea('body', Input::old('body'), array('placeholder' => 'Enter Post Content', 'class' => 'form-control', 'rows' => '4')) }}
      </div>
      
    <hr>
      <button type="submit" class="btn btn-default form-btn">Submit</button>
  {{ Form::close() }}