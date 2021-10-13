{include file='templates/header.tpl'}

<div class="container">
    <h1 class="mb-4">{$mouse->nombre}</h1>
    <h2>Precio: {$mouse->precio}</h2>
    <h2>Marca: {$mouse->marca}</h2>
    <h2>Stock: {$mouse->stock}</h2>
</div>
<a href="home" class="btn btn-success">Volver al home</a>

{include file='templates/footer.tpl'}