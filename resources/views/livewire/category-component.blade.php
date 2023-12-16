<div>
    <style>
        .tree, .tree ul {
            margin:0;
            padding:0;
            list-style:none
        }
        .tree ul {
            margin-left:1em;
            position:relative
        }
        .tree ul ul {
            margin-left:.5em
        }
        .tree ul:before {
            content:"";
            display:block;
            width:0;
            position:absolute;
            top:0;
            bottom:0;
            left:0;
            border-left:1px solid
        }
        .tree li {
            margin:0;
            padding:0 1em;
            line-height:2em;
            color:#369;
            font-weight:700;
            position:relative
        }
        .tree ul li:before {
            content:"";
            display:block;
            width:10px;
            height:0;
            border-top:1px solid;
            margin-top:-1px;
            position:absolute;
            top:1em;
            left:0
        }
        .tree ul li:last-child:before {
            background:#fff;
            height:auto;
            top:1em;
            bottom:0
        }
        .indicator {
            margin-right:5px;
        }
        .tree li a {
            text-decoration: none;
            color:#369;
        }
        .tree li button, .tree li button:active, .tree li button:focus {
            text-decoration: none;
            color:#369;
            border:none;
            background:transparent;
            margin:0px 0px 0px 0px;
            padding:0px 0px 0px 0px;
            outline: 0;
    }
    </style>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <div class="container" style="display: flex;width: 100vw;">  
        <div class="container" style="margin-top:30px;font-size: x-large; width: 50%; order: 1;">
            <div class="row">
                <div class="col-md-7">
                    <ul id="tree1">
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                    {{ $category->name }}
                                    @if($category->children->count() > 0)
                                        <ul>
                                            @foreach($category->children as $child)
                                                <li>
                                                    {{ $child->name }}
                                                    @if($child->children->count() > 0)
                                                        <ul>
                                                            @foreach($child->children as $grandchild)
                                                                <li>{{ $grandchild->name }}</li>
                                                                <!-- Continue nesting for more levels if needed -->
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
          
            <div class="container"style=" order: 2; width: 50%; margin:10px" >
                <div id="selectDataTokio" class="{{--slide-container--}}" style="background:rgb(255, 255, 255)">
                    <div class="card">
                        <h5 class="card-header"></h5>
                        <div class="card-body">
                            <div class="row gy-3">
                                <!-- Enable Body Scrolling Offcanvas -->
                                <form wire:submit.prevent="saveToDatabase">
                                    <div class="col-lg-4 col-md-6">
                                        <small class="text-light fw-semibold mb-3">New Category Name</small>
                                        <div class="mt-3">
                                            
                                            <input class="form-control phone-mask" type="text" id="myInput2" wire:model="category_name" value="" >
                                        
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <small class="text-light fw-semibold mb-3">Parent Category ID</small>
                                        <div class="mt-3">
                                            
                                            <input class="form-control phone-mask" type="text" id="myInput3" wire:model="parent_category_name" value="" >
                                                            
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

    <script>





        $.fn.extend({
        treed: function (o) {
        
        var openedClass = 'glyphicon-minus-sign';
        var closedClass = 'glyphicon-plus-sign';
        
        if (typeof o != 'undefined'){
            if (typeof o.openedClass != 'undefined'){
            openedClass = o.openedClass;
            }
            if (typeof o.closedClass != 'undefined'){
            closedClass = o.closedClass;
            }
        };
        
            //initialize each of the top levels
            var tree = $(this);
            tree.addClass("tree");
            tree.find('li').has("ul").each(function () {
                var branch = $(this); //li with children ul
                branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
                branch.addClass('branch');
                branch.on('click', function (e) {
                    if (this == e.target) {
                        var icon = $(this).children('i:first');
                        icon.toggleClass(openedClass + " " + closedClass);
                        $(this).children().children().toggle();
                    }
                })
                branch.children().children().toggle();
            });
            //fire event from the dynamically added icon
        tree.find('.branch .indicator').each(function(){
            $(this).on('click', function () {
                $(this).closest('li').click();
            });
        });
            //fire event to open branch if the li contains an anchor instead of text
            tree.find('.branch>a').each(function () {
                $(this).on('click', function (e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
            //fire event to open branch if the li contains a button instead of text
            tree.find('.branch>button').each(function () {
                $(this).on('click', function (e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
        }
        });

        //Initialization of treeviews

        $('#tree1').treed();

        $('#tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});

        $('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});

        

    </script>
  

</div>
