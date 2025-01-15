<div>
    <title>Confirmation</title>
    <form action="" method="post">
    @if ($msg === 'success')
        @include('components.popupmessage', ['message' => 'Login successfully', 'class' => 'success'])
        <button type="submit">User List</button>
    @elseif ($msg === 'error')
        @include('components.popupmessage', ['message' => 'Error occurred', 'class' => 'error'])
        <button type="submit">Logint</button>
    @elseif ($msg === 'warning')
        @include('components.popupmessage', ['message' => 'User already exists', 'class' => 'warning'])
    @endif

    </form>
    

</div>
<style>
    .success {
        color: green;
    }

    .error {
        color: red;
    }

    .warning {
        color: orange;
    }
</style>
