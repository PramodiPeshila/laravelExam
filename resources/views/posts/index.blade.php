<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>

</head>

<body>
    <div style="max-width:900px;margin:0 auto;background:white;padding:20px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.1);">
        <h1 style="text-align:center;margin-bottom:20px;font-family:Arial, sans-serif;">All Posts</h1>

        <a href="{{ route('posts.create') }}" style="display:inline-block;background-color:#007bff;color:white;padding:10px 16px;border-radius:4px;text-decoration:none;margin-bottom:20px;">➕ Create New Post</a>

        @if ($posts->isEmpty())
            <p style="font-family:Arial, sans-serif;color:#555;">No posts found.</p>
        @else
            @foreach($posts as $post)
                <div style="background:#fff;border:1px solid #ddd;border-radius:6px;padding:15px;margin-bottom:15px;font-family:Arial, sans-serif;">
                    <h2 style="font-size:20px;margin-bottom:10px;color:#333;">{{ $post->title }}</h2>
                    <p style="color:#555;margin-bottom:12px;">{{ $post->content }}</p>

                    <a href="{{ route('posts.edit', $post->id) }}" style="color:#007bff;text-decoration:none;margin-right:8px;">✏️ Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:none;border:none;color:#d9534f;cursor:pointer;font-size:14px;margin-left:8px;" onclick="return confirm('Are you sure you want to delete this post?')">
                            🗑️ Delete
                        </button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>
