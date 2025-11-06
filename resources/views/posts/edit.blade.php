<!DOCTYPE html>

<head>
    
    <title>Edit Post</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
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

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="title" placeholder="Post Title" value="{{ old('title', $post->title) }}" required>

            <textarea name="content" placeholder="Post Content" rows="5" required>{{ old('content', $post->content) }}</textarea>

            @if($post->image)
                <p>Current image:</p>
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post image" style="max-width:200px; display:block; margin-bottom:10px;" />
            @endif

            <input type="file" name="image" accept="image/*">

            <button type="submit">Update Post</button>
        </form>
    </div>
</body>
</html>
