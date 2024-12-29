<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @include('layouts.app')
</head>

<body>
    <div class="m-10">
        <h1 class="text-gray-600 text-2xl font-semibold mb-3">Book Collection</h1>
        <div class="flex flex-col items-start">
            <div class="flex justify-end mb-6 w-full">
                <a href="{{ route('posts.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-semibold text-sm px-6 py-2 rounded-lg shadow">+
                    Create Post</a>
            </div>
            <div class="w-full overflow-x-auto shadow-lg">
                <table class="w-full text-left border-collapse bg-white rounded-lg">
                    <thead class="bg-blue-500 text-white">
                        <tr class="font-semibold">
                            <th scope="col" class="p-4 border-b border-gray-200 rounded-ss-lg pl-7">Id</th>
                            <th scope="col" class="p-4 border-b border-gray-200">Title</th>
                            <th scope="col" class="p-4 border-b border-gray-200">Description</th>
                            <th scope="col" class="p-4 border-b border-gray-200 text-center rounded-se-lg">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr class="hover:bg-gray-100">
                                <td class="p-4 font-medium text-gray-800 border-b border-gray-200 pl-7">
                                    #{{ $post->id }}</td>
                                <td class="p-4 font-medium text-gray-800 border-b border-gray-200">{{ $post->title }}
                                </td>
                                <td
                                    class="p-4 text-gray-600 border-b border-gray-200  break-words max-w-[750px] overflow-hidden">
                                    {!! $post->content !!}</td>
                                <td class="p-4 text-center border-b border-gray-200">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="bg-yellow-500 text-white hover:bg-yellow-600 text-xs font-semibold py-2 px-3 rounded-lg"><i
                                                class="fas fa-pencil-alt"></i>
                                            Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white hover:bg-red-600 text-xs font-semibold py-2 px-3 rounded-lg">
                                            <i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="p-4 text-center text-gray-500">Data Post belum Tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    {{-- <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->title }}
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul> --}}
</body>

</html>
