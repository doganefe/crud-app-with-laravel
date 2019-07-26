<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <title>Document</title>
    <style>
        .isChecked{
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <div class="header" style="padding:12px;text-align:center;">

        <a style="margin:3px;" href="/">
          Home
        </a>
    
        <a style="margin:3px;" href="/blog">
          Blogs
        </a>

        <a style="margin:3px;" href="/posts">
          Posts
        </a>
          </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
        
    <footer class="footer" style="position:absolute;bottom:0;width:100%;padding:25px;">
        <div class="content has-text-centered">
            <p>
                <strong>Deneme App</strong> by <a href="https://github.com/doganefe">Doğan Efe</a>. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>
            </p>
        </div>
    </footer>
</body>
</html>