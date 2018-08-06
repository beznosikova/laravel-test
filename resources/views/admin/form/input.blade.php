<input
        type="text"
        class="form-control"
        id="{{ $field }}"
        placeholder="Enter {{ $field }}"
        name="{{ $field }}"
        value="{{ old($field, isset($entity)? $entity->$field : '') }}"
>
