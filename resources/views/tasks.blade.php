<x-layout>
    @foreach($tasks as $task)
    <section>
        <h2>{{$task->name}}  <span><a href="/tasks/{{$task->id}}">See Detail</a></span></h2>
        <x-taskinfo user_username="{{$task->user->username}}" user_name="{{$task->user->name}}" category_name="{{$task->category->name}}" />
    </section>
    @endforeach
</x-layout>