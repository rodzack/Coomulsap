
        <div class="row footer">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 color">
                        <h4 class="greenTitle">Nuestra empresa</h4>
                        <p class="paragraphGray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ex in lacus elementum consequat. Nunc elementum a lectus eget facilisis. Morbi auctor mi sit amet elit ultricies, ut iaculis ante porttitor. Ut nulla libero, sodales quis volutpat vel, fermentum a ligula. Curabitur et lacinia neque, at convallis augue. Duis rhoncus dictum rhoncus. Suspendisse sit amet purus non neque sagittis facilisis. Quisque quis arcu at quam suscipit lobortis. Etiam mattis ipsum vitae velit tincidunt vehicula. Sed blandit vitae nulla eget tincidunt. Mauris turpis ex, porttitor a nisl eu, ullamcorper efficitur ligula. Vivamus suscipit quam pulvinar dui finibus mattis nec consectetur augue. Proin ultricies nec ligula quis dictum. Sed euismod a nunc non lacinia. Nulla nulla ipsum, euismod at aliquam eget, vehicula sed ipsum. In eleifend lacus eros, et elementum est efficitur sit amet.</p>
                    </div>
                    <div class="col-md-4 color">
                        <b>Dirección:</b><p class="inlineElement">Calle 42 Sur # 69 A 58 San Antonio de Prado / Medellín</p> <br>
                        <b>PBX:</b> <p class="inlineElement">(574) 444 42 62</p> <br/>
                        <b>Email</b> <p class="inlineElement">coomulsap@coomulsap.com</p>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-2">
                                <b>PQR</b>
                            </div>
                            <form>
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <label for="input-name" class="col-3 col-form-label">Nombre</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" id="input-name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-email" class="col-3 col-form-label">Email</label>
                                        <div class="col-9">
                                            <input class="form-control" type="text" id="input-email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="comment">Comentarios:</label>
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                </div>
                            </form>
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
