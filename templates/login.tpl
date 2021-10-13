{include file='templates/header.tpl'}

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2>Log In</h2>
            <form class="form-alta" action="verify" method="post">
                <input placeholder="Username" type="text" name="username" id="username" required>
                <input placeholder="Password" type="password" name="password" id="password" required>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
        </div>
    </div>
    <h4 class="alert-danger">{$error}</h4>

    <a href="home" class="btn btn-outline-dark">Volver al Home</a>

</div>

{include file='templates/footer.tpl'}