<section id="cart">
    <h2>Mi carrito</h2>

    <?php if (isset($_SESSION['identity'])): ?>

    <?php if (isset($_SESSION['cart'])): ?>
    <div class="container-fluid mt-5">
        <div class="row d-flex justify-content-evenly">
            <div class="col-6 d-flex flex-column p-3 align-items-center">
                <table class="table w-100 mb-5 text-center">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h3>Producto</h3>
                            </th>
                            <th scope="col">
                                <h3>Cantidad</h3>
                            </th>
                            <th scope="col">
                                <h3>Subtotal</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php foreach ($_SESSION['cart'] as $key): ?>
                        <tr>
                            <td>
                                <?="<h4>" . $key['description'] . "</h4>" ?>
                            </td>
                            <td>
                                <?="<h4>" . $key['quantity'] . "</h4>" ?>
                            </td>
                            <td>
                                <?="<h4>" . $key['subtotal'] . " $</h4>" ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

                <a href="http://localhost/Aikara/Comida/clearCart" class="clear-cart">Limpiar carrito</a>
            </div>

            <div class="col-4 d-flex flex-column align-items-start p-4 bg-light" id="payment">
                <h2>Resumen</h2>

                <?php $sum = 0;
            foreach ($_SESSION['cart'] as $cart): ?>
                <?php
                $sum += $cart['subtotal'];
                        ?>
                <?php endforeach; ?>
                <h3 class="mt-3">Total: <?= $sum; ?> $</h3>
                <h2 class="mt-5 mb-3">Método de pago</h2>
                <div class="form-check">
                    <input class="form-check-input fs-4" type="radio" name="flexRadioDefault" id="cash_radio">
                    <label class="form-check-label fs-4" for="cash_radio">
                        Efectivo 
                    </label>
                </div>

                <form class="container-fluid mt-2" id="cash_pay">
                    <h3>Se abonará al momento de la entrega</h3>
                </form>


                <div class="form-check mt-3">
                    <input class="form-check-input fs-4" type="radio" name="flexRadioDefault" id="card_radio">
                    <label class="form-check-label fs-4" for="card_radio">
                        Tarjeta de Crédito/Débito
                    </label>
                </div>

                <form class="mt-4" id="card_pay">
                    <div class="container-fluid mb-3">
                        <i class="fab fa-cc-visa fs-1"></i>
                        <i class="fab fa-cc-mastercard fs-1"></i>
                        <i class="fab fa-cc-paypal fs-1"></i>
                        <i class="fab fa-cc-amex fs-1"></i>
                        <i class="fab fa-cc-diners-club fs-1"></i>
                    </div>

                    <div class="container-fluid mb-3">
                        <input class="input-cc" type="text">
                        <input class="input-cc" type="text">
                        <input class="input-cc" type="text">
                        <input class="input-cc" type="text">
                    </div>

                    <div class="container-fluid mb-3">
                        Codigo de seguridad
                        <input class="input-cc" type="text">
                    </div>

                    <div class="container-fluid mb-3">
                        Vencimiento de la tarjeta
                        <input class="input-cc-month" type="month">
                    </div>

                    <a href="" class="btn btn-danger p-3 fs-3" id="btn-confirm-buy">Confirmar compra</a>
                </form>
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