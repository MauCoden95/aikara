<section id="cart">
    <h2>Mi carrito</h2>

    <div class="container-fluid">
        <div class="row ">
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
        </div>
    </div>
    
</section>