<section id="cart">
    <h2>Mi carrito</h2>

    <?php if(isset($_SESSION['identity'])) : ?>

        <?php if(isset($_SESSION['cart'])) : ?>
        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-evenly">
                <div class="col-6 d-flex flex-column p-3 align-items-center">
                    <table class="table w-100 mb-5 text-center">
                        <thead>
                            <tr>
                                <th scope="col"><h3>Producto</h3></th>
                                <th scope="col"><h3>Cantidad</h3></th>
                            </tr>
                        </thead>
                        <tbody>
                    

                            <?php foreach($_SESSION['cart'] as $key) : ?>
                                <tr>
                                    <td><?= "<h4>".$key['description']."</h4>" ?></td>
                                    <td><?= "<h4>".$key['quantity']."</h4>" ?></td>
                                </tr>
                            <?php endforeach; ?>
                            
                        </tbody>
                    </table>

                    <a href="http://localhost/Aikara/Comida/clearCart">Limpiar carrito</a>
                </div>

                <div class="col-4 d-flex flex-column align-items-center bg-light">
                   <h2>Resumen</h2>
                   <h4 class="mt-3">Total: 10000$</h4>
                   <h2>Método de pago</h2>
                   <div class="form-check mt-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Efectivo (Se abonará al momento de la entrega)
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Tarjeta de Crédito/Débito
                        </label>
                    </div>

                    
                </div>
            </div>
        </div>
        <?php else: ?>
            <p class="message">
                Todavia no tiene platos agregados al carrito
            </p>
        <?php endif; ?>
    <?php else: ?>
        <p class="message">
            Tiene que iniciar sesion para ver o agregar cosas al carrito
        </p>
    <?php endif; ?>
    
</section>