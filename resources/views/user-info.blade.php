<div>
    <title>Confirmation</title>
    <form action="user-list" method="get">
    @if ($msg === 'success')
        @include('components.popupmessage', ['message' => $message, 'class' => 'success'])
        <button type="submit">User List</button>
    @elseif ($msg === 'error')
        @include('components.popupmessage', ['message' => $message, 'class' => 'error'])
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
