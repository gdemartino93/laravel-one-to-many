@extends('layouts.main-layout')
@section('title')
    <title>Home Page</title>
@endsection

@section('contents')
<div class="container">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, minus! Molestias aliquid dolore asperiores optio odit unde, laboriosam reiciendis voluptates culpa magni deserunt quae nulla quia magnam quos, dolor mollitia.
        Dolores ab eaque repellendus excepturi laudantium maiores praesentium eveniet sunt vel ipsum quis soluta asperiores provident, obcaecati minima amet quod distinctio quos ad voluptate necessitatibus iusto. Laudantium fugiat aliquid quos.
        Saepe officia quidem velit quod optio? Assumenda veniam, quis ut itaque laudantium consequuntur. Error doloribus earum, veritatis sed cupiditate nulla id repudiandae ipsa officiis magni laudantium, inventore ex architecto cumque.
        Dolorem dignissimos quia aliquid odio nemo obcaecati quam explicabo, aliquam velit minus ut corrupti tenetur dicta quae labore similique iste molestiae, inventore ipsam deleniti ea ab dolore voluptatum tempore. Aliquid?
        Numquam, consequatur. Error, molestiae? Vitae nesciunt pariatur est iste praesentium reprehenderit atque eos. Inventore soluta architecto quibusdam sequi a eveniet, dignissimos nisi officia praesentium consectetur tenetur harum rerum aliquam ea!</p>
        <div class="d-flex justify-content-around">
            <a href="{{route('pages.person')}}">Person</a>
            <a href="{{route('pages.posts')}}">Post</a>
        </div>
</div>

@endsection