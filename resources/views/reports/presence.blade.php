<div class="col-md-3">
    <div class="checkbox">
        <label>
            <input type="checkbox" name="member_ids[]" value="{{$member->id}}">
                    {{strtoupper($member->family_name)}} {{$member->name}}
        </label>
    </div>
</div>