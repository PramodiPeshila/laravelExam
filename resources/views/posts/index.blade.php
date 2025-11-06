<!DOCTYPE html>

<head>
   
    <title>All Posts</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        a.create-btn {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 16px;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 20px;
        }

        a.create-btn:hover {
            background-color: #0056b3;
        }

        .post {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .post h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .post p {
            color: #555;
            margin-bottom: 12px;
        }

        .post a {
            color: #007bff;
            text-decoration: none;
        }

        .post a:hover {
            text-decoration: underline;
        }

        .delete-btn {
            background: none;
            border: none;
            color: #d9534f;
            cursor: pointer;
            font-size: 14px;
            margin-left: 8px;
        }

        .delete-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>All Posts</h1>

        <a href="{{ route('posts.create') }}" class="create-btn"> Create New Post</a>

        @if ($posts->isEmpty())
            <p>No posts found.</p>
        @else
            @foreach($posts as $post)
                <div class="post">
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="max-width:200px; display:block; margin-bottom:10px;" />
                    @endif
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>

                    <a href="{{ route('posts.edit', $post->id) }}"> Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this post?')">
                            Delete
                        </button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>
