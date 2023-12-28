<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is a table representation of your tasks</h1>

    <table>
        <tr>
            <th>Table_Name</th>
            <th>Table_Description</th>
            <th>Change</th>
        </tr>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->task_name }}</td>
                <td>{{ $task->task_description }}</td>
                <td><a href="/edit_task/{{$task->id}}">Edit</a></td>
                <td><a href="/delete_task/{{$task->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <a href="/create">Create New Task</a>
</body>
</html>