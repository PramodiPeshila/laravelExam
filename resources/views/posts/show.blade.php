<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>

    <!-- Styles converted to inline CSS below -->
</head>

<body>
    <div style="max-width:700px;margin:0 auto;background:white;padding:20px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.1);font-family:Arial, sans-serif;">
        <h2 style="font-size:24px;color:#333;margin-bottom:15px;">{{ $post->title }}</h2>
        <p style="color:#555;font-size:16px;line-height:1.5;margin-bottom:20px;">{{ $post->content }}</p>

        <a href="{{ route('posts.index') }}" style="display:inline-block;background-color:#007bff;color:white;padding:10px 16px;border-radius:4px;text-decoration:none;">← Back to Posts</a>
    </div>
</body>
</html>
