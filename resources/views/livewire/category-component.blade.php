<div>



    <div class="container" style="display: flex;width: 100%;">  
        <div class="container" style="margin-top:30px;font-size: x-large; width: 50%; order: 1;">
            <div class="row">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        Categories
                    </button>
                    <div class="dropdown-menu p-4">
                        @foreach($categories as $category)
                            <div class="dropdown">
                                <button type="button" style="margin-bottom: 10px" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    {{ $category->name }}
                                </button>
                                <div class="dropdown-menu p-4">
                                    @if($category->children->count() > 0)
                                        @foreach($category->children as $child)
                                            <div class="dropdown">
                                                <button type="button" style="margin-bottom: 10px" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                    {{ $child->name }}
                                                </button>
                                                <div class="dropdown-menu p-4">
                                                    @if($child->children->count() > 0)
                                                        @foreach($child->children as $grandchild)
                                                            <button type="button" style="margin-bottom: 10px" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                                {{ $grandchild->name }}
                                                            </button>
                                                            <!-- Continue nesting for more levels if needed -->
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                
                
            </div>
        </div>
          
            <div class="container"style=" order: 2; width: 50%; margin:10px; " >
                
                    <div class="card" >
                        <h5 class="card-header"></h5>
                        <div class="card-body">
                            <div class="row gy-3">
                                <!-- Enable Body Scrolling Offcanvas -->
                                <form wire:submit.prevent="saveToDatabase" style="display: flex;">
                                    <div class="col-lg-6 col-md-6">
                                        <small class="text-light fw-semibold mb-3">New Category Name</small>
                                        <div class="mt-3">
                                            
                                            <input class="form-control phone-mask"  required type="text" id="myInput2" wire:model="category_name" value="" >
                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6" style="margin-left: 5px">
                                        <small class="text-light fw-semibold mb-3">Parent Category Name</small>
                                        <div class="mt-3">
                                            
                                            <input class="form-control phone-mask" style="margin-left: 5px" required type="text" id="myInput3" wire:model="parent_category_name" value="" >
                                                            
                                            </div>
                                        
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row justify-content-end">
                                        <div class="col-sm-15" style="margin-top: 15px">
                                        
                                        <button {{--onclick="toggleInputs()"--}}type="submit"class="btn btn-primary">Save </button>
                                        </div>
                                    </div>
                                </form>
                                
            
                                
                                
                            </div>
                        </div>
                    </div>

                    
                
            </div>

        
    </div>



</div>
