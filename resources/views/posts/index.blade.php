<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }
        .posts-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .post-card {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: box-shadow 0.3s;
        }
        .post-card:hover {
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
        .post-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
            text-decoration: none;
            display: block;
        }
        .post-title:hover {
            color: #0066cc;
        }
        .post-meta {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 10px;
        }
        .post-excerpt {
            color: #555;
            line-height: 1.6;
            max-height: 3em;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .empty-message {
            text-align: center;
            color: #999;
            padding: 40px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Blog Posts</h1>
        
        @if($posts->count() > 0)
            <div class="posts-list">
                @foreach($posts as $post)
                    <a href="{{ route('posts.show', $post->id) }}" style="text-decoration: none;">
                        <div class="post-card">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <div class="post-meta">
                                By <strong>{{ $post->user->name }}</strong> • {{ $post->created_at->format('M d, Y') }}
                            </div>
                            <p class="post-excerpt">{{ $post->content }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div class="empty-message">
                <p>No blog posts yet.</p>
            </div>
        @endif
    </div>
</body>
</html>
