@props(['shops', 'field' => '','selected' => null])

<select {{ $attributes->merge(['class' => 'form-select']) }}>
    @foreach ($events as $event)
        <option value="{{ $event->id }}" {{ $selected == $event->id ? 'selected' : '' }}>
            {{ $event->title }}
        </option>
    @endforeach
</select>

@error($field)
<div class="text-red-600 text-sm">{{ $message }}</div>
@enderror
