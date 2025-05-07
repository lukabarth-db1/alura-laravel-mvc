<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        <!-- @csrf é a diretiva do blade para lidar com Cross-Site Request Forgery (CSRF) -->
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">

        <button type="submit">Adicionar</button>
    </form>
</x-layout>