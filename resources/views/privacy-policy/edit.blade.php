@extends('layout.app')

@section('title', 'Privacy')

@section('content')
    <x-sidebar/>
    <div class="content">
        <h2>Edit Privacy Policy</h2>
        <form action="{{ route('privacy-policy.update') }}" method="POST">
            @csrf
            @method('PUT')

            <textarea name="content" id="editor">
           {{$policy->content}}
        </textarea>

            <div class="mt-3">
                <button type="button" class="btn btn-outline-secondary">Discard</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>


@endsection
