<div>
   
    <div>
        <form wire:submit.prevent="add">
            First:<input type="text" name="num1" wire:model="num1">
            Second:<input type="text" name="num2"  wire:model="num2">
            <button type="submit">add</button>
        </form>
        {{$sum}}
    </div>
    <div>
        <input type="text" wire:model="todo" placeholder="Todo..."> 
     
        <button wire:click="addt">Add Todo</button>
     
        <ul>
            @foreach ($todos as $todo)
                <li>{{ $todo }}</li>
            @endforeach
        </ul>
    </div>
    
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
          Dropdown form
        </button>
        <div class="dropdown-menu p-4">
          
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                  Dropdown form
                </button>
                <div class="dropdown-menu p-4">
                  dfadsf
                  
                </div>
            </div>
          
        </div>
    </div>
        

</div>
