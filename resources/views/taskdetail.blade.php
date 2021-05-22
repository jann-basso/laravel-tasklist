<x-layout>
    <a href="/tasks">See all tasks</a>
    <section>
        <h2>{{$taskdetail->name}}</h2>
        <p>{{$taskdetail->description}}</p>
        <x-taskinfo user_username="{{$taskdetail->user->username}}" user_name="{{$taskdetail->user->name}}" category_name="{{$taskdetail->category->name}}" />
    </section>
</x-layout>