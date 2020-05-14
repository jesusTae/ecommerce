

<div class="page-info-section page-info" style="background-color:lightgray">
    <div class="container">
        <div class="site-breadcrumb">
            <a href="<?php echo site_url('/'); ?>">Globalsoft</a> /
            <span>Productos</span>
        </div>
        <img src="<?php echo base_url('asset/clientes/img/page-info-art.png')?>" alt="" class="page-info-art">
    </div>
</div>
<!-- Page Info end -->
<!-- Page -->
<div class="page-area cart-page spad">
    <div class="container">
        <div class="cart-table">
            <table id="Products">
                <thead>
                    <tr>
                        <th class="product-th negrita">Producto</th>
                            <th class="negrita">Precio</th>
                            <th class="negrita">Cantidad</th>
                            <th class="negrita">Total</th>
                    </tr>
                </thead>
                <tbody id="Cart_Products">                       
                    <tr id="Product_@temp.codart@Model.id">
                        
                        <td class="product-col">
                            <img src="~/img/@temp.imgart" alt="" style="border-radius: 10%">
                            <div class="pc-title">
                                <h4>1</h4>
                                <i class="fa fa-trash-o col-md-1" aria-hidden="true" style="cursor: pointer; color:red"></i>
                                <i class="fa fa-eye  col-md-1" aria-hidden="true" style="cursor: pointer; color:blue"></i>
                            </div>
                        </td>
                        <td class="price-col">2,400</td>
                        <td class="quy-col text-center">                           
                            <span id="Cantidad">2</span>
                        </td>
                        <td class="tot text-center">                           
                            <span id="total_prod">4,800</span>
                        </td>
                        <td class="total-col">
                            <input type="hidden" class="precioventa" value="" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row cart-buttons">
            <div class="col-lg-5 col-md-5">
                <div class="site-btn btn-continue" style="background-color: #28a745 !important;" onclick="window.location= '/Ecommerce'">Continuar Comprando</div>
            </div>
           
        </div>
    </div>
    <div class="card-warp">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="visibility:hidden">
                    <div class="shipping-info">
                        <h4>Shipping method</h4>
                        <p>Select the one you want</p>
                        <div class="shipping-chooes">
                            <div class="sc-item">
                                <input type="radio" name="sc" id="one">
                                <label for="one">Next day delivery<span>$4.99</span></label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="two">
                                <label for="two">Standard delivery<span>$1.99</span></label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="three">
                                <label for="three">Personal Pickup<span>Free</span></label>
                            </div>
                        </div>
                        <h4>Cupon code</h4>
                        <p>Enter your cupone code</p>
                        <div class="cupon-input">
                            <input type="text">
                            <button class="site-btn">Apply</button>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-6">
                    <div class="cart-total-details">
                        <h4>Total Compra</h4>
                        <p>Información</p>
                        <ul class="cart-total-card">
                            <li>Subtotal<span id="Subtotal_Compra">$0</span></li>
                            <li>Envio<span>0</span></li>
                            <li class="total">Total<span id="Total_Compra">$0</span></li>
                        </ul>
                        <div id="idPayuButtonContainer">
                            <input name='Submit' class='site-btn btn-full' style="background-color: orange" id='hide' type='button' value='Realizar Pago'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="ProductView" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title text-center h5"></strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="ModalImage" class="img-thumbnail" style="border-radius:15%;width: 467px;height: 313px;" />
                <p id="ModalDescription" style="color:black"></p>
                <p id="ModalPrice" style="color:black"></p>
                <input type="hidden" id="codart" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>