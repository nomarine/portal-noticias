<table>
    <thead>
        <th>Título</th>
        <th>Texto</th>
    </thead>
    <tbody>
        @foreach($noticias as $noticia)
        <tr>
            <td>{{$noticia->titulo}}</td>
            <td>{{$noticia->texto}}</td>
        </tr>
        @endforeach
    </tbody>
</table>