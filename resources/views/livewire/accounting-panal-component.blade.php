



<div>
    <style>
        .slide-container {
        width: 0;
        overflow: hidden;
        transition: width 0.5s; /* Adjust the duration as needed */
    }
    
    .slide-container.open {
        width: 100%; /* Adjust the width as needed */
    }
    
    </style>
    {{--{{$CurrentOwner_name}}
     <div>
        <form wire:submit.prevent="add">
            First:<input type="text" name="num1" wire:model="num1">
            Second:<input type="text" name="num2"  wire:model="num2">
            <button type="submit">add</button>
        </form>
        {{$sum}}
    </div>--}}
    

        <div style="margin-top:25px">

            <div class="container">
                <div class="col-lg-4 col-md-4" class ="bookBotton"name="Check" id="CkeckButtonTokio">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-6 mb-4">
                            <div class="card" style="background:rgb(230, 225, 225)">
                                <div class="card-body">
                                    <span class="fw-semibold d-block mb-1">Admid Revenue</span>
                                    <h3 class="card-title mb-2">${{$Admin_total}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" style="display: flex;">
                <div class="container" style="order:1">
                    @foreach ($Owners as $Owner)   
                            
                            <div class="col-lg-4 col-md-4 clickable-div"  name="Check"wire:click="curantOwner({{$Owner}})" style="width:100%">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="fw-semibold d-block mb-1">{{$Owner->owner_name}}</span>
                                                <h3 class="card-title mb-2">${{$Owner->total_owner_revenue}}</h3>
                                                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<button class="btn btn"  onclick="myFunction()">More</button>
                            <button class="btn btn" >load</button>--}}
                        
                    @endforeach
                </div>

                <div class="container" style=" order: 2;">
                    <div id="selectDataTokio" class="{{--slide-container--}}" style="background:rgb(255, 255, 255)">
                        <div class="card">
                            <h5 class="card-header">{{$CurrentOwner_name}}</h5>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <!-- Enable Body Scrolling Offcanvas -->
                                    <div class="col-lg-4 col-md-6">
                                        <small class="text-light fw-semibold mb-3">Service Name</small>
                                        <div class="mt-3">
                                            
                                            {{$CurrentOwner_service}}
                
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <small class="text-light fw-semibold mb-3">Initial price</small>
                                        <div class="mt-3">
                                            
                                            <input class="form-control phone-mask" type="text" id="myInput2" wire:model="CurrentOwner_initial_price" value="{{$CurrentOwner_initial_price}}" >
                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <small class="text-light fw-semibold mb-3">Tax</small>
                                        <div class="mt-3">
                                            
                                            <input class="form-control phone-mask" type="text" id="myInput3" wire:model="CurrentOwner_tax" value="{{$CurrentOwner_tax}}" >
                                            <div class="col-md">
                                                <div class="form-check form-check-inline mt-3">
                                                  <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="inlineRadioOptions"
                                                    id="inlineRadio1"
                                                    value="0"
                                                    wire:model="CurrentOwner_tax_type"
                                                    @if($CurrentOwner_tax_type === 0) checked @endif
                                                  />
                                                  <label class="form-check-label" for="inlineRadio1" style="font-size: 10px">Fixed</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                  <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="inlineRadioOptions"
                                                    id="inlineRadio2"
                                                    value="1"
                                                    wire:model="CurrentOwner_tax_type"
                                                    @if($CurrentOwner_tax_type === 1) checked @endif
                                                  />
                                                  <label class="form-check-label" for="inlineRadio2" style="font-size: 10px">Percent</label>
                                                </div>                    
                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <small class="text-light fw-semibold mb-3">Admin Tax</small>
                                        <div class="mt-3">
                                            <input class="form-control phone-mask" type="text" id="myInput4" wire:model="CurrentOwner_admin_tax" value="{{$CurrentOwner_admin_tax}}" >
                                            <div class="col-md">
                                                <div class="form-check form-check-inline mt-3">
                                                  <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="inlineRadioOptionsadmin"
                                                    id="inlineRadio3"
                                                    value="0"
                                                    wire:model="CurrentOwner_admin_tax_type"
                                                    @if($CurrentOwner_admin_tax_type === 0) checked @endif
                                                  />
                                                  <label class="form-check-label" for="inlineRadio1" style="font-size: 10px">Fixed</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                  <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="inlineRadioOptionsadmin"
                                                    id="inlineRadio4"
                                                    value="1"
                                                    wire:model="CurrentOwner_admin_tax_type"
                                                    @if($CurrentOwner_admin_tax_type === 1) checked @endif
                                                  />
                                                  <label class="form-check-label" for="inlineRadio2" style="font-size: 10px">Percent</label>
                                                </div>                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <small class="text-light fw-semibold mb-3">Total Owner Revanue</small>
                                        <div class="mt-3">

                                            {{$CurrentOwner_total_revinue}}                                                                                  
                                        
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-15" style="margin-top: 15px">
                                          
                                          <button {{--onclick="toggleInputs()"--}} wire:click="saveToDatabase" class="btn btn-primary">Save </button>
                                        </div>
                                      </div>
                                    
                
                                    
                                    
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
                
            


                
            



        </div>

        
        

        
        
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
            function toggleInputs() {
                    var inputs = document.querySelectorAll('input[type="text"]');
                    
                    inputs.forEach(function(input) {
                        input.disabled = !input.disabled;
                    });
                }
            
            function myFunction() {
                //Livewire.emit('updatedSelected_Owner', 456);
                $("#selectDataTokio").toggleClass("open");
                
            }
            

        </script>
</div>





