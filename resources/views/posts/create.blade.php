<!DOCTYPE html>

<head>
    
    <title>Add New Post</title>

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
        <h1>Add New Post</h1>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Post Title" required>
            <textarea name="content" placeholder="Post Content" rows="5" required></textarea>
            <input type="file" name="image" accept="image/*">
            <button type="submit">Save Post</button>
        </form>
    </div>
</body>
</html>
