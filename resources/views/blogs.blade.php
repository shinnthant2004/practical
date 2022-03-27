<x-layout>

    <x-slot name='title'>
        <title>Blogs</title>
    </x-slot>


    @foreach ($blogs as $blog )

    <h1><a href="blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h1>

    <div>

    <p>Published by {{ $blog->created_at->diffForHumans() }}</p>

    <a href="categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a>

    <h3><a href="users/{{ $blog->author->username }}">Author - {{ $blog->author->name }}</a></h3>

    <p>{{ $blog->body }}</p>

    </div>

    @endforeach

</x-layout>
