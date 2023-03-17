<u>

    <?php
    echo "<li><a href='" . route('inicio') . "''>Home</a></li>";
    echo "<li><a href='" . route('nosotros') . "'>Nosotros</a></li>";
    ?>

</u>

<br>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('inicio')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('nosotros')}}">Nosotros</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('mision')}}">Mision</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('vision')}}" >Vision</a>
    </li>
    <li class="nav-item">
        <a class="nav-link "href="{{route('contactos')}}">Contactos</a>
    </li>
</ul>
