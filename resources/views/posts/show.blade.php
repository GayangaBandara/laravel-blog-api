<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Blog</title>
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
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #0066cc;
            text-decoration: none;
            font-size: 0.95em;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .post-container {
            background: white;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        .post-meta {
            color: #666;
            font-size: 0.95em;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .author {
            font-weight: bold;
            color: #333;
        }
        .post-content {
            color: #555;
            line-height: 1.8;
            font-size: 1em;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('posts.index') }}" class="back-link">← Back to Posts</a>
        
        <div class="post-container">
            <h1>{{ $post->title }}</h1>
            
            <div class="post-meta">
                By <span class="author">{{ $post->author }}</span> • {{ $post->created_at->format('F d, Y') }}
                @if($post->created_at->notEqualTo($post->updated_at))
                    <span>(Updated: {{ $post->updated_at->format('F d, Y') }})</span>
                @endif
            </div>
            
            <div class="post-content">
                {{ $post->content }}
            </div>
        </div>
    </div>
</body>
</html>
