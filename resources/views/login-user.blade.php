<div>
    <title>Login</title>
    <h1>Login Page</h1>
    <form action="auth" method="post">
        @csrf
        <input type="text" name="userEmail" id="userEmail" value="{{old('userEmail')}}" hint="Enter email">
        @error('userEmail')
        <span class="error">{{$message}}</span>
        @enderror 
        
        <br>
        <input type="password" name="userPassword" id="userPassword" hint="Enter Password"> 
        @error('userPassword')
        <span class="error">{{$message}}</span>
        @enderror 
        <br>
        <button type="submit">Login</button>

    </form>
</div>
<style>
    div{
        height:100%;
        background-color: azure;
        align-content: center;
        text-align: center;
        
    }
    h1{
    color: darkblue;
    background-color: azure;
    font-family: cursive;
    align-content: center;
    text-align: center;
    }
    input{
        background-color: azure;
        font-family: cursive;
        margin-top: 10px;
        border-radius: 5px;
        border-block-color: inherit;
        border-color:aquamarine;
    }
    .error{
        color:red;
        text-align:left;
    }
    form{
        align-content:center;
        background-color: azure;
    }
    button{
        border-block-color: inherit;
        font-family: cursive;
        background-color: aquamarine;
        margin-top: 10px;
        font-size: large;
        border-radius: 10px;
        border-color: aquamarine;
        width:10%;
        cursor: grab;
    }
</style>
