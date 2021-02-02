<form action="{{route('saveproject')}}" method="POST">

    @csrf
    @method('POST')
    <input type="text" placeholder="name" name="name"><br>
    <input type="text" placeholder="type" name="type"><br>
    <input type="text" placeholder="year" name="year"><br>
    <input type="text" placeholder="feature" name="feature"><br>
    <input type="text" placeholder="language" name="language"><br>
    <input type="text" placeholder="link" name="link"><br>

    <button type="submit" name="submit">Save</button>
</form>