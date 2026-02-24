@extends('app')


@section('content')
    <h1>Assignment 4</h1>

    

    <p class="subtitle">{{ $greeting }}</p>

    <h3>Authors and Books</h3>
    <ul class="course-list">
        @foreach($authors as $author)
    
    <div style="margin-top: 1.5rem; padding: 1rem; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;">
        
        <h4 style="margin-top: 0; color: #4f46e5;">
            👤 {{ $author->name }} 
            <span style="font-size: 0.8rem; color: #64748b; font-weight: normal;">({{ $author->email }})</span>
        </h4>
        
        <ul class="course-list">
            @forelse($author->books as $book)
                <li class="course-item">
                    <div style="max-width: 80%;">
                        <strong>📖 {{ $book->title }}</strong>
                        <p style="font-size: 0.8rem; color: #64748b; margin: 4px 0 0 0;">
                            {{ Str::limit($book->description, 60) }}
                        </p>
                    </div>
                    <span class="badge" style="background: #e0e7ff; color: #3730a3;">Book</span>
                </li>
            @empty
                <li class="course-item" style="color: gray;">This author does not have any books yet.</li>
            @endforelse
        </ul>
        
    </div>

@endforeach
    </ul>
    
    @env('local')
        <p style="color: gray;">Debug: Data loaded from the controller</p>
    @endenv
@endsection
