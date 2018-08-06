<select
        class="form-control"
        id="{{ $field }}"
        name="{{ $field }}"
>
    @foreach ($options as $option)
        <option
                value="{{ $option->id }}"
                {{ (old( $field, isset($entity)? $entity->$field : '' ) == $option->id ? "selected":"") }}
        >{{ $option->title }}</option>
    @endforeach
</select>