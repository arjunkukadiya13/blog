<div>
    <form action="user-info" method="post">
        @csrf
        <!-- {{URL::current()}} -->
         <!-- {{url()->current()}} <br>
         {{URL::previous()}} <br>
         {{url()->previous()}} <br>
         {{url()->full()}} -->
        <h2>Add new user</h2>
        <Label>User Name: </Label><input class="input-widget" type="text" name="userName" id="userName"> <br>
        <Label>User Email: </Label><input class="input-widget" type="text" name="userEmail" id="userEmail"><br>
        <Label>User Password: </Label><input class="input-widget" type="password" name="userPassword" id="userPassword"><br>
        <button type="submit" name="addUser">Add New User</button>
    </form>
</div>
<style>
    input{
    color: black;
    background: beige;
    font-size: large;
    border-color: rebeccapurple;
    border-radius: 5px;
    }
    .input-widget{
        margin: 5px 0px 10px;
    }
    button{
    color: black;
    background-color: antiquewhite;
    font-size: large;
    border-radius: 5px;
    }
</style>
