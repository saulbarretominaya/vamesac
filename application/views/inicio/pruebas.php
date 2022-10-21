<button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#opcion_target_producto" data-bs-whatever="@mdo">Buscar</button>
<div class="modal fade" id="opcion_target_producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-center w-100" id="exampleModalLabel">Seleccionar Productos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="font-size: 12px;">
                <table id="id_datatable_productos" class="table table-bordered table-sm table-hover table-responsive">
                    <thead>
                        <tr>
                            <th></th>
                            <th id="dtable_codigo">Codigo</th>
                            <th id="dtable_descripcion_producto">Nombre del Producto</th>
                            <th id="dtable_ds_unidad_medida">U.M</th>
                            <th id="dtable_ds_marca_producto">Marca</th>
                            <th id="dtable_precio_unitario">Precio Unitario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($index_productos)) : ?>
                            <?php foreach ($index_productos as $index_productos) : ?>
                                <tr>
                                    <?php $split_productos =
                                        $index_productos->id_producto . "*" .
                                        $index_productos->id_general . "*" .
                                        $index_productos->codigo_producto . "*" .
                                        $index_productos->descripcion_producto . "*" .
                                        $index_productos->id_unidad_medida . "*" .
                                        $index_productos->ds_unidad_medida . "*" .
                                        $index_productos->id_marca_producto . "*" .
                                        $index_productos->ds_marca_producto . "*" .
                                        $index_productos->id_moneda . "*" .
                                        $index_productos->ds_moneda . "*" .
                                        $index_productos->precio_unitario;
                                    ?>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary js_seleccionar_modal_producto " data-bs-toggle="modal" value="<?php echo $split_productos; ?>" data-bs-target="" data-bs-whatever="@mdo" style="font-size: 8px;"><span class="fas fa-check"></span></button>
                                    </td>
                                    <td><?php echo $index_productos->codigo_producto; ?></td>
                                    <td><?php echo $index_productos->descripcion_producto; ?></td>
                                    <td><?php echo $index_productos->ds_unidad_medida; ?></td>
                                    <td><?php echo $index_productos->ds_marca_producto; ?></td>
                                    <td><?php echo $index_productos->precio_unitario; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>