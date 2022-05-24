<div class="container d-flex justify-content-between align-items-center my-4">
    @php
        $categories = DB::table('categories')->get();
    @endphp
    @foreach ($categories as $category)
    <div class="card" style="width: 25rem;">
        <img src="/storage/{{$category->image_path}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h5 class="card-title"> {{ $category->name }} </h5>
            <a href=" {{ url('/smartphones/' . $category->name) }} " class="btn btn-primary">Ver categoría</a>
        </div>
    </div>
    @endforeach
</div>
