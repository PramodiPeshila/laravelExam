<!DOCTYPE html>

<head>
    
    <title>View Post</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 16px;
            border-radius: 4px;
            text-decoration: none;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>{{ $post->title }}</h2>
        @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="max-width:100%; margin-bottom:15px;" />
        @endif
        <p>{{ $post->content }}</p>

        <a href="{{ route('posts.index') }}">← Back to Posts</a>
    </div>
</body>
</html>
