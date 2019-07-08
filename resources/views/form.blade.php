@if ($errors->any())
    <h1 style="color: rebeccapurple"> {{ $errors->first()}} </h1>
@endif
<form action="/form" method="POST">
    @csrf
    <input type="text" name="name" id="">
    <br>
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <select name="city" id="">
        <option value="hn">Hà Nội</option>
        <option value="sg">Sài Gone</option>
    </select>
    <br>
    <label for="inputCheckbox">
        <input type="checkbox" name="class_php" value="php" id=""> PHP
    </label>
    <label for="inputCheckbox">
        <input type="checkbox" name="class_laravel" value="laravel"> Laravel
    </label>
    <br>
    <label for="inputRadio">
        <input type="radio" name="gender" value="male" id=""> Male
    </label>
    <label for="inputRadio">
        <input type="radio" name="gender" value="female" id=""> Female
    </label>
    <input type="submit" value="sbm">
</form>