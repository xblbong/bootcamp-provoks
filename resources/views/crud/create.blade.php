<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="m-10">
        <h1 class="text-gray-600 text-2xl font-semibold mb-6">Create Book Collection</h1>
        <form action="{{ route('posts.store') }}" method="POST" class="bg-[#63b2e7] p-8 rounded-lg">
            @csrf
            <div class="form-group flex flex-col items-left mb-5">
                <label class="font-weight-bold text-left mb-2 font-bold text-lg text-white">JUDUL</label>
                <input type="text" class="p-2 rounded-md form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                <!-- error message untuk title -->
                @error('title')
                    <div class="alert alert-danger mt-2 text-red-600">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group flex flex-col items-left mb-8">
                <label class="font-weight-bold text-left mb-2 font-bold text-lg text-white">KONTEN</label>
                <textarea class="p-2 rounded-md form-control @error('content') is-invalid @enderror" name="content" rows="5"
                    placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                <!-- error message untuk content -->
                @error('content')
                    <div class="alert alert-danger mt-2 text-red-600">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-md btn-primary bg-blue-800  hover:bg-blue-600 text-white font-semibold text-sm px-5 py-2 rounded-lg shadow flex justify-center items-center transform transition-transform duration-300 hover:scale-105">Simpan</button>

            {{-- <input type="text" name="title" placeholder="Title">
            <textarea name="content" placeholder="Content"></textarea>
            <button type="submit">Save</button> --}}
        </form>
    </div>
</body>

</html>