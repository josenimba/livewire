<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Basics</title>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <nav>
        <a href="/" @class(['current' => request()->is('/')])>Welcome</a>
        <a href="/todos" @class(['current' => request()->is('todos')])>ToDos</a>
        <a href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
        <a href="/posts" @class(['current' => request()->is('posts')])>Posts</a>
    </nav>


    <!-- <livewire:counter /> Muestra el componente counter -->

</body>

</html>