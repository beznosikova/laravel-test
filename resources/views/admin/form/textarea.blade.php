<textarea
        class="form-control"
        id="{{ $field }}"
        placeholder="Enter {{ $field }}"
        name="{{ $field }}"
>{{ old($field, isset($entity)? $entity->$field : '') }}</textarea>