@props(['shops', 'field' => '','selected' => null])

<select {{ $attributes->merge(['class' => 'form-select']) }}>
    @foreach ($shops as $Networking)
        <option value="{{ $Networking->id }}" {{ $selected == $Networking->id ? 'selected' : '' }}>
            {{ $Networking->user_id }}
        </option>
    @endforeach
</select>

@error($field)
<div class="text-red-600 text-sm">{{ $message }}</div>
@enderror
