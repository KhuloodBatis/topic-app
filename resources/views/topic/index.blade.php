@foreach ($topics as $topic)
    <h4><a href="{{ route('topics.show', $topic) }}">{{ $topic->title }}</a>{{$topic->posts->count()}}(posts)</h4>
    <p>{{ $topic->user->name }}</p>
@endforeach
