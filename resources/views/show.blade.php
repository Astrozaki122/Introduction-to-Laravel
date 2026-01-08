<x-layout>
    <h1> {{ $introduction->name }}'s profile</h1> 

    <div class="bg-gray-200 p-4 rounded">
    <p><strong>Skill level:</strong> {{ $introduction->skill }}</p>
    <p><strong>About me:</strong></p>
    <p>{{ $introduction->bio }}</p>
  </div>
  <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>Location Details</h3>
    <p><strong>Name:</strong> {{ $introduction->location->name }}</p>
    <p><strong>Location:</strong> {{ $introduction->location->location }}</p>
    <p><strong>Description:</strong> {{ $introduction->location->description }}</p>
  </div>
  <form action="{{ route('Introduction.destroy', $introduction->id) }}" method="POST">
   @csrf
   @method('DELETE')

   <button type="submit" class="btn my-4">Delete a list</button>


  </form>
</x-layout>