@extends('layout.app')

@section('title', 'Contact')

@section('content')
    <x-sidebar/>
    <div class="container my-4">
        <h2 class="mb-4">Edit Contact Form</h2>

        <div class="accordion" id="contactAccordion">
            @foreach($messages as $message)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $message->id }}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $message->id }}" aria-expanded="false" aria-controls="collapse{{ $message->id }}">
                            {{ $message->ime }} {{ $message->prezime }} | {{ $message->email }} <span class="ms-auto">{{ $message->created_at->format('d.m.Y.') }}</span>
                        </button>
                    </h2>
                    <div id="collapse{{ $message->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $message->id }}" data-bs-parent="#contactAccordion">
                        <div class="accordion-body">
                            {{ $message->poruka }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <nav>
            <ul class="pagination">
                <li class="page-item {{ $messages->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $messages->previousPageUrl() }}" tabindex="-1" aria-disabled="true">&lt;</a>
                </li>
                @for ($i = 1; $i <= $messages->lastPage(); $i++)
                    <li class="page-item {{ $i == $messages->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $messages->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $messages->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $messages->nextPageUrl() }}">&gt;</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
