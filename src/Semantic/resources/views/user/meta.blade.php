
    <div class="field">
        @input_maker_label('Phone')
        @input_maker_create('meta[phone]', ['type' => 'string'], $user)
    </div>

    <div class="field">
        <div class="ui checkbox">
            @input_maker_create('meta[marketing]', ['type' => 'checkbox'], $user)
            @input_maker_label('I agree to recieve marketing materials', ['for' => 'meta[marketing]'])
        </div>
    </div>

    <div class="field">
        <div class="ui checkbox">
            <input id="terms_and_cond" type="checkbox" name="meta[terms_and_cond]" value="1" @if ($user->meta->terms_and_cond) checked @endif>
            <label for="terms_and_cond">I agree to the <a href="{{ url('terms-and-conditions') }}">Terms &amp; Conditions</a></label>
        </div>
    </div>