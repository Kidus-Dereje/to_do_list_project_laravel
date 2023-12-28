<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>To Do List - Create</h1>
    <h2><a href="/read_tasks">See tasks</a></h2>
    <form method="post" action="/save_task">
        @csrf
        Task name: <input type="text" placeholder="input task" name="task_name"/><br/>
        Task description: <input type="text" placeholder="description" name="task_description"/><br/>
        <input type="submit" />
    </form>
</body>
</html>