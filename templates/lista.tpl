
    <div class="homecontainer">
      {if $administrador|default:false}
     <div>
      <h2>Agregar Mouse</h2>

      <form class="form-alta" action="createMouses" method="post">
        <select name="Marca">
          {foreach from=$marcas item=$marca}
          <option value="{$marca->id_marca}">{$marca->marca_name}</option>
          {/foreach}
        </select>
        <input
          placeholder="Nombre"
          type="text"
          name="nombre"
          id="nombre"
          required
        />
        <input
          placeholder="Precio"
          type="number"
          name="precio"
          id="precio"
          required
        />
        <select name="stock">
          <option value="0">No hay stock</option>
          <option value="1">Hay stock</option>
        </select>
        <input type="submit" class="btn btn-success" value="Agregar" />
      </form>

      <h2>Agregar Marca</h2>

      <form class="form-alta" action="createMarca" method="post">
        <input
          placeholder="Nombre de marca"
          type="text"
          name="marca_name"
          id="marca_name"
          required
        />
        <input type="submit" class="btn btn-success" value="Agregar" />
      </form>

      <ul>
        {foreach from=$marcas item=$marca}
        <li>
          <p>{$marca->marca_name}</p>
          <form
            class="form-alta"
            action="updateMarca/{$marca->id_marca}"
            method="post"
          >
            <input type="text" name="editarNombre" placeholder="Nombre nuevo" />
            <input type="submit" class="btn btn-primary" value="Editar" />
          </form>
          <a class="btn btn-danger" href="deleteMarca/{$marca->id_marca}"
            >Borrar</a
          >
        </li>
        {/foreach}
      </ul>
    </div>

      <div class="col-md-8">
        <h1>Compra</h1>

        <ul class="list-group">
          {foreach from=$mouses item=$mouse}
          <li
            class="
              list-group-item
              d-flex
              justify-content-between
              align-items-center
            "
          >
            <a href="viewMouses/{$mouse->id_producto}">{$mouse->nombre}</a>
            {if $mouse->stock == 1 }
            <p>Precio: {$mouse->precio}</p>
            <a
              class="btn btn-danger"
              href="updateMouses/0/{$mouse->id_producto}"
              >Quitar stock</a
            >
            {else}
            <p>No hay stock</p>
            <a
              class="btn btn-success"
              href="updateMouses/1/{$mouse->id_producto}"
              >Agregar stock</a
            >
            {/if}
            <a class="btn btn-danger" href="deleteMouses/{$mouse->id_producto}"
              >Borrar</a
            >
          </li>
          {/foreach}
        </ul>
      </div>

      {else}

      <div class="col-md-8">
        <h1>Compra</h1>

        <ul class="list-group">
          {foreach from=$mouses item=$mouse}
          <li
            class="
              list-group-item
              d-flex
              justify-content-between
              align-items-center
            "
          >
            <a href="viewMouses/{$mouse->id_producto}">{$mouse->nombre}</a>
            {/foreach}
          </li>
        </ul>
      </div>
      {/if}

     <div>
      <h3>Filtrar por Marca</h3>

      <form action="home" method="post">
        <select name="filtro" required>
          <option value="todasMarcas">Todas las marcas</option>
          {foreach from=$marcas item=$marca}
          <option value="{$marca->id_marca}">{$marca->marca_name}</option>
          {/foreach}
        </select>
        <input type="submit" class="btn btn-info" value="Filtrar" />
      </form>
      </div>
</div>
