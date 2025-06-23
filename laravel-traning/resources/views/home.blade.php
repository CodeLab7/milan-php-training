<div>
	<h1>Home Page</h1>
	<h3>{{url()->current()}}</h3>
    <h3>{{url()->full()}}</h3>
    <a href="{{URL::to('about')}}" >About Page</a>
    <a href="{{URL::to('about',['Milan'])}}" >About Page</a>
	<a href="{{route('user.index')}}" >About Page</a>
</div>
