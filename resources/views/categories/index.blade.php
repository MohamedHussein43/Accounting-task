<!-- Add these to the <head> section of your HTML file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    

    <!-- resources/views/categories/index.blade.php -->

<ul id="categoryTree" class="list-group">
    @foreach($categories as $category)
        <li class="list-group-item">
            <span class="toggle-icon" onclick="toggleCategory({{ $category->id }})">
                &#x25B6; <!-- Right-pointing triangle (collapsed) -->
            </span>
            {{ $category->name }}
            @if($category->children->count() > 0)
                <ul id="categoryChildren{{ $category->id }}" class="list-group" style="display: none;">
                    @foreach($category->children as $child)
                        @include('categories.index', ['categories' => [$child]])
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>



<script>
    // script1
    function toggleCategory(categoryId) {
        const childrenList = $(`#categoryChildren${categoryId}`);
        const toggleIcon = $(`[onclick="toggleCategory(${categoryId})"]`);

        if (childrenList.is(":visible")) {
            childrenList.hide();
            toggleIcon.html('&#x25B6;'); // Right-pointing triangle (collapsed)
        } else {
            childrenList.show();
            toggleIcon.html('&#x25BC;'); // Down-pointing triangle (expanded)
        }
    }
    
</script>

    