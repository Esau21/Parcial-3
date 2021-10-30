<!-- Name Field -->
<div class="form-group col-sm6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $role->name }}</p>
</div>


<!-- Publication Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permissions', 'Permissions:') !!}
    @foreach($role->permissions as $permission)
    <p>{{ $permission->name }}</p>
    @endforeach
</div>

<!-- Created At Field -->
<div class="form-group col-sm6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $role->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $role->updated_at }}</p>
</div>