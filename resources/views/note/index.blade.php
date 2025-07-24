<x-layout>
    <div class="note-container">
        <a href="{{ route('note.create') }}" class="new-note-btn">New Note</a>

        <div class="notes">
            @foreach ($notes as $note)
                 <div class="note">
                <div class="note-body">
                    {{Str ::words($note->note,30 )}}
                </div>
                <div class="note-buttons">
                    <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                    <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                    <a href="#" class="note-edit-button">Delete</a>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</x-layout>
