<div>
    {{-- Do your work, then step back. --}}
    <div>
        @foreach ($posts as $post)

            @include('posts', $post)

        @endforeach
    </div>
    

</div>
