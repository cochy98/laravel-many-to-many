<div class="col-3">
  <div class="my-sidebar p-3">
    <h2>Categorie:</h2>
    @foreach ($categories as $category)
      <span class="badge rounded-pill me-2" style="background-color: {{$category->colour}}" >{{$category->name}}</span>
    @endforeach
  </div>
</div>
