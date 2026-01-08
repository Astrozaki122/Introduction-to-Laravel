<x-layout>
    <h2> About the Website</h2>
    <ul> 
    @foreach($Introduction as $Introductions)
    <li>
     <x-card href="{{ route('Introduction.show', $Introductions->id) }}" highlight="$Introductions['age'] > 70">
       <div>
        <h3>{{ $Introductions->name }}</h3>
        <p> {{ $Introductions->location->name }}</p>
       </div>
      
     </x-card>
    
    </li>
    @endforeach
    </ul>
    {{ $Introduction->links() }}
</x-layout>