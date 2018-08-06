<div class="form-group">
    <label class="control-label col-sm-2" for="{{ $field }}">{{ ucfirst($field) }}:</label>
    <div class="col-sm-10">
        @include('admin.form.'.$fieldType )
    </div>
</div>