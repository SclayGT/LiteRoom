
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch"><i class="icon_close"></i></div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here....." wire:model="search" />
        <!-- @if(count($books)> 0)
        <ul>
            @foreach($books as $book)
                <li style="color: white;">
                    <a href="">
                        <img src="{{ Storage::url($book->thumbnail) }}" alt="gambar" width="90" height="90">
                        <span>{{ $book->title }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        @endif -->
      </form>   
    </div>
  </div>

