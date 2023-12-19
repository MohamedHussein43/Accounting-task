<div> 
        @foreach($children as $child)
            <div class="dropdown">
                <button type="button" style="margin-bottom: 10px" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    {{ $child->name }}
                </button>
                <div class="dropdown-menu p-4">
                    @if(count($child->children))
                            @include('livewire/manage-child',['children' => $child->children])
                    @endif
                </div>
            </div>       
        @endforeach 
</div>
