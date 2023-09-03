@props(['value', 'name'])

<select id="countries" name="{{ $name }}"
    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mb-4 block mt-1 w-full">
    <option  style="display:none" selected value>{{ $value }}</option>
    <option value="Chapter1">Chapter1</option>
    <option value="Chapter2">Chapter2</option>
    <option value="Chapter3">Chapter3</option>
    <option value="Chapter4">Chapter4</option>
</select>
