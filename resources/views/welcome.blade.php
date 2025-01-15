<h1> Welcome Page</h1>
<a href="add-user">Add User</a> <br>
<!-- other method -->
<a href="{{URL::to('add-user')}}">Add user</a> <br>

<a href="{{URL::to('about',['arjun'])}}">About Arjun</a> <br>

<!-- use of named url -->
 <a href="{{route('pup')}}">About</a> <br>