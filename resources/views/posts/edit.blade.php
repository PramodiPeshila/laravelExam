<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>

    <!-- Styles converted to inline CSS below -->
</head>

<body>
    <div style="max-width:600px;margin:0 auto;background:white;padding:20px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.1);font-family:Arial, sans-serif;">
        <h1 style="text-align:center;margin-bottom:20px;">Edit Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input 
                type="text" 
                name="title" 
                placeholder="Post Title"
                value="{{ old('title', $post->title) }}"
                required
                style="width:100%;padding:10px;margin-bottom:15px;border:1px solid #ccc;border-radius:4px;box-sizing:border-box;">

            <textarea 
                name="content" 
                placeholder="Post Content"
                rows="5"
                required
                style="width:100%;padding:10px;margin-bottom:15px;border:1px solid #ccc;border-radius:4px;box-sizing:border-box;">{{ old('content', $post->content) }}</textarea>

            <button type="submit" style="background-color:#28a745;color:white;border:none;padding:10px 16px;border-radius:4px;cursor:pointer;">Update Post</button>
        </form>
    </div>
</body>
</html>
