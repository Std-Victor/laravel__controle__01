<div>
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" value="{{ old('titre') }}">
    @error('titre') {{ $message }} @enderror
</div>
<div>
    <label for="auteur">Auteur</label>
    <input type="text" name="auteur" id="auteur" value="{{ old('auteur') }}">
    @error('auteur') {{ $message }} @enderror
</div>
<div>
    <label for="prix">Prix</label>
    <input type="number" name="prix" id="prix" value="{{ old('prix') }}">
    @error('prix') {{ $message }} @enderror
</div>
<div>
    <label for="annee">Titre</label>
    <input type="number" name="annee" id="annee" value="{{ old('annee') }}">
    @error('annee') {{ $message }} @enderror
</div>
