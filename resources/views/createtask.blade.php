<x-layout>
    <p>Create Task</p>
    <form action="create-task/form" method="POST">
        @csrf 
        <select name="user_id">
            <option value="">Choose Responsible</option>
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select> 

        <select name="category_id">
            <option value="">Choose Category</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select> 

        Task: <input type="text" name="name">
        Description: <input type="text" name="description">
        <button type="submit">Add</button>
    </form>

    @if(session('message'))
        <div>
            <p>{{session('message')}}</p> 
            <a href="/tasks">View Task List</a>
        </div>
    @endif

</x-layout>