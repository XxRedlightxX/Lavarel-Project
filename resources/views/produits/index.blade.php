<x-layout>
    <h1>Produits</h1>

    @foreach ($products as $produit)
        <h2> {{$produit->name }}</h2>
        <p>{{$produit->description }}</p>
        <p>{{$produit->size }}</p>
    @endforeach

</x-layout>