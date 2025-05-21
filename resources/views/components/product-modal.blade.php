<div class="modal fade" id="modal-{{ $id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal-content">
<div class="modal-header border-0 d-flex justify-content-between align-items-center">
    <h5 class="modal-title fw-bold text-center flex-grow-1" id="modalLabel-{{ $id }}">
        {{ $nombre }}
    </h5>
    <button type="button" class="btn-close ms-3" data-bs-dismiss="modal" aria-label="Cerrar"></button>
</div>

            <div class="modal-body text-center">
                <p class="text-muted bg-light rounded-3 p-3 fst-italic small shadow-sm">
                    {{ $descripcion }}
                </p>

                <div class="table-responsive mt-4">
                    <table class="table table-bordered align-middle mb-0 custom-nutrition-table">
                        <thead>
                            <tr class="text-white bg-gradient bg-warning">
                                <th colspan="2" class="text-uppercase">Información nutricional</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            <tr>
                                <td><strong>Calorías</strong></td>
                                <td>{{ $calorias }}</td>
                            </tr>
                            <tr>
                                <td><strong>Proteínas</strong></td>
                                <td>{{ $proteinas }}</td>
                            </tr>
                            <tr>
                                <td><strong>Carbohidratos</strong></td>
                                <td>{{ $carbohidratos }}</td>
                            </tr>
                            <tr>
                                <td><strong>Grasas</strong></td>
                                <td>{{ $grasas }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
