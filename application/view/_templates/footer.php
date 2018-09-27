</div>
        <div class="row footer paragraphGray">
            <div class="col-md-12 footerMargin">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="greenTitle footerFirstMargin">Nuestra empresa</h4>
                        <p class="footerFirstMargin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ex in lacus elementum consequat. Nunc elementum a lectus eget facilisis. Morbi auctor mi sit amet elit ultricies, ut iaculis ante porttitor. Ut nulla libero, sodales quis volutpat vel, fermentum a ligula. Curabitur et lacinia neque, at convallis augue. Duis rhoncus dictum rhoncus. Suspendisse sit amet purus non neque sagittis facilisis. Quisque quis arcu at quam suscipit lobortis. Etiam mattis ipsum vitae velit tincidunt vehicula. Sed blandit vitae nulla eget tincidunt. Mauris turpis ex, porttitor a nisl eu, ullamcorper efficitur ligula.</p>
                    </div>
                    <div class="col-md-4 centerHorizontal footerFontSise">
                        <b>Dirección: </b><p class="inlineElement">Calle 42 Sur # 69 A 58 <br/>San Antonio de Prado / Medellín</p> <br>
                        <b>PBX:</b> <p class="inlineElement">(574) 444 42 62</p> <br/>
                        <b>Email:</b> <p class="inlineElement">coomulsap@coomulsap.com</p>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <b>PQR</b>
                                <hr/>
                                <form>
                                <div class="form-group"> <!-- Full Name -->
                                    <label for="idName" class="control-label">Nombre</label>
                                    <input type="text" class="form-control" id="idName" name="name" placeholder="Su nombre">
                                </div>    
                                <div class="form-group"> <!-- Street 1 -->
                                    <label for="idEmail" class="control-label">Correo electronico</label>
                                    <input type="email" class="form-control" id="idEmail" name="email" placeholder="Email">
                                </div>                                  
                                <div class="form-group"> <!-- Street 2 -->
                                    <label for="idMessage" class="control-label">Mensaje</label>
                                    <textarea  class="form-control" id="idMessage" name="message" placeholder="Mensaje" rows="5"></textarea>
                                </div>    
                                <div class="form-group"> <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>     
                                
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Se cierra el container que empieza en el header-->
    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL; ?>";
    </script>

    <!-- our JavaScript -->
    <script type="text/javascript" src="<?php echo URL;?>js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="<?php echo URL;?>js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo URL;?>js/bootstrap.min.js"></script>
</body>
</html>
