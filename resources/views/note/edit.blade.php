<x-layout>
   <div class="note-contanier">
      <h1>Edit your notes</h1>
      <form action="{{route('note.update', $note)}}" method="post" class="note">
         <textarea name="note" rows="10" class="note-body" placeholder="Enter your notes here">
            {{$note->note}}
         </textarea>
         <div class="note-buttons">
            <a href="{{route('note.index')}}" class="note-cancle-button">Cancel</a>
            <button class="note-sumbit-button">Submit</button>
         </div>
      </form>
   </div>
</x-layout>
