<div id="payoneer_form" class="row px-3"
    style="display:none">
    <form method="post" action="/payment/save" class="row px-3">
        @csrf
        @foreach($fields as $field)
        <div class="{{ $field->style }} form-group position-engagement ">
            <label class="col-form-label">{{ $field->label }}:</label>
            @if($field->type == 'select')
            <select name="beneficiary_country" id="beneficiary_country" class="form-control">
                @foreach($field->options as $option)
                <option value="{{ $option }}"
                    {{ isset($data->{$field->name}) && $data->{$field->name} == $option ? 'selected' : '' }}>{{ $option }}</option>
                @endforeach
            </select>
            @else
            <input type="{{ $field->type }}" maxlength="35" class="form-control" name="{{ $field->name }}"
                value="{{ isset($data->{$field->name}) ? $data->{$field->name} : '' }}" />
            @endif
        </div>
        @endforeach
        <div class="col-xl-12">
            <div class="switch-container">
                <label class="switch">
                    <input type="checkbox" name="preferred" value="1">
                    <span class="switch-button"></span>
                    Set this as my preferred payment option
                </label>
            </div>
        </div>
        <div class="col-xl-12">
            <input type="submit" class="btn-action btn-text btn-green margin-0 right" value="Submit" name="bank_payment">
        </div>
    </form>
</div>