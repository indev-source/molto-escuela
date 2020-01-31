<form class="" action="{{asset('auth/logout')}}" method="post">
    @csrf
    <button type="submit" name="button">Salir</button>
</form>
