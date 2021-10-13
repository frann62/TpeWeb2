{include file="header.tpl"}

<div class="container">

    <h1>Bienvenido a MouseGeek!</h1>

{if $administrador|default:false }

    <a href="logout" class="btn btn-outline-dark">Desloguearse</a>

{else}

    <a href="login" class="btn btn-outline-dark">Loguearse</a>
    
{/if}

</div>

{include file="lista.tpl"}

{include file="footer.tpl"}