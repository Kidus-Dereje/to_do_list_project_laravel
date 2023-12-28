<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>To Do List - Edit</h1>

    <form method="" action="/update_task/{{ $task->id }}">
        @csrf

        @method("PUT")

        Task name: <input type="text" placeholder="input task" name="task_name" value="{{ $task->task_name }}"/><br/>

        Task description: <input type="text" placeholder="description" name="task_description" value="{{ $task->task_description }}"/><br/>

        <button type="submit">Update</button>
    </form>
</body>
</html>