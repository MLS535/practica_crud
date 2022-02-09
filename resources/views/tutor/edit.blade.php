@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="showimages"></div>
        </div>
        <div class="col-md-6 offset-3 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h6 class="text-white">{{__("Editar un proyecto")}}</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-right mb-3">
                            <a href="{{ route('posts.index', $post) }}" class="btn btn-primary">@lang("Back")</a>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> @lang("There were some problems with your input.")<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('posts.update', $post)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label><strong> {{__("Name")}} :</strong></label>
                            <input type="text" name="name" class="form-control"  value="{{old('name',$post->name)  }}"/>
                            {!! $errors->first('size','<small>:message</small><br>') !!}
                        </div>
                        <div class="form-group">
                            <label><strong>@lang("Category") :</strong></label><br>
                            <label><input type="checkbox" name="category[]" value="Laravel" @if(is_array(old('category')) && in_array("Laravel", old('category'))) checked @endif> Laravel</label>
                            <label><input type="checkbox" name="category[]" value="JQuery" @if(is_array(old('category')) && in_array("JQuery", old('category'))) checked @endif> JQuery</label>
                            <label><input type="checkbox" name="category[]" value="Bootstrap" @if(is_array(old('category')) && in_array("Bootstrap", old('category'))) checked @endif> Bootstrap</label>
                            <label><input type="checkbox" name="category[]" value="Codeigniter" @if(is_array(old('category')) && in_array("Codeigniter", old('category'))) checked @endif> Codeigniter</label>
                            <label><input type="checkbox" name="category[]" value="JQuery UI" @if(is_array(old('category')) && in_array("JQuery UI", old('category'))) checked @endif> JQuery UI</label>
                            {!! $errors->first('size','<small>:message</small><br>') !!}
                        </div>
                        <div class="form-group">
                            <label><strong>@lang("Date"):</strong></label><br>
                            <input type="date" name="date" class="form-control" value="{{old('date',$post->date)}}"/>
                            {!! $errors->first('size','<small>:message</small><br>') !!}
                        </div>

                        <div class="form-group">
                            <label><strong>@lang("Number of hours done"):</strong></label><br>
                            <input type="number" name="number" class="form-control" value="{{old('number',$post->number)}}"/>
                            {!! $errors->first('size','<small>:message</small><br>') !!}
                        </div>

                        <div class="form-group">
                            <label>@lang("Participant")</label>
                            <select class="form-control" name="size" >
                                <option @if(old('size') === 'Pick Size') selected @endif>Pick Size</option>
                                <option value="2" @if(old('size') === '2') selected @endif>2</option>
                                <option value="4" @if(old('size') === '4') selected @endif>4</option>
                                <option value="8" @if(old('size') === '8') selected @endif>8</option>
                            </select>
                            {!! $errors->first('size','<small>:message</small><br>') !!}
                            <small class="form-text text-muted">Your tournament size</small>
                        </div>

                        <div class="form-group">
                            <label><strong>@lang("Gender"):</strong></label><br>
                            <label>
                                <input type="radio" name="gender" class="form-control" value="Female" {{old('gender') === 'Female' ? 'checked='. '"checked"': ''}}/>Female</label>
                            <label> <input type="radio" name="gender" class="form-control" value="Male"  {{old('gender') === 'Male' ? 'checked='. '"checked"': ''}}/>Male</label>
                        </div>

                        <div class="form-group">
                            <label><strong>@lang("Description") :</strong></label>
                            <textarea class="form-control" rows="4" cols="40" name="description">{{old('description',$post->description)}}</textarea>
                        </div>

                        <div class="form-group">
                            <label><strong>@lang('Email') :</strong></label>
                            <input type="email" name="email" class="form-control" value="{{old('email',$post->email)}}"/>
                        </div>

                        <div class="form-group custom-file">
                            <label class="custom-file-label" id="customFile">Choose File</label>
                            <input name="image" type="file" class="custom-file-input" id="customFile">
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <p></p>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm">@lang("Save")</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
