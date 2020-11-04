<div class="form-group">
    <label for="{{$field}}">{{$label}}</label>
    <textarea type="text" name="{{$field}}" id="{{$field}}" placeholder="{{$placeholder??''}}" class="form-control">@isset($value){{old($field)?old($field):$value}} @else {{old($field)}} @endisset</textarea>
    @error($field)
    <div class="alert alert-warning" style="background: #111111;"> {{$message}} </div>
    @enderror
</div>