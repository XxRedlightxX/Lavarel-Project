<x-layout>
    <h1>Nouveau</h1>
    <form method="post" action="{{route('products.store')}}">
        @csrf
    
    <label for="fname"> name:</label><br>
        <input type="text" id="name" name="name" value="John"><br>
        
        <label for="lname">Description :</label><br>
        <input type="text" id="description" name="description" value="Doe"><br><br>
        
        <label for="size">Size :</label><br>
        <input type="text" id="size" name="size" value="Doe"><br><br>
        
        <input type="submit" value="Submit">
</form> 


</x-layout>
