<x-layout>
  <form action="{{ route('Introduction.store') }}" method="POST">
    @csrf
    <h2>Create a New List</h2>

    <!--  Name -->
    <label for="name"> Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      value="{{ old('name') }}" 
      required
    >

    <!-- Skill -->
    <label for="skill"> Skill (0-100):</label>
    <input 
      type="number" 
      id="skill" 
      name="skill" 
      value = "{{ old('skill') }}"
      required
    >

    <!-- Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    > {{ old('bio') }}</textarea>

    <!-- select a location -->
    <label for="location_id">location:</label>
    <select id="location_id" name="location_id" required>
      <option value="" disabled selected>Select a location</option>
      @foreach($locations as $location)
        <option value="{{ $location->id }}" {{ $location->id == old('location_id') ? 'selected' : '' }}>{{ $location->name }}</option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create New List</button>

    <!-- validation errors -->
    @if ($errors->any()) 
    <ul class = "px-4 py-2 bg-red-100">
      @foreach($errors->all() as $error)
      <li class="my-2 text-red-500">
      {{ $error }}
      @endforeach
      </li>
    </ul>
    @endif
  </form>
</x-layout>