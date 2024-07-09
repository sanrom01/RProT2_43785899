<div class="container mt-5">
        <h2>Registro de Usuario</h2>
        <form action="register.php" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="firstName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
                <div class="invalid-feedback">
                    Por favor, introduce tu nombre.
                </div>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
                <div class="invalid-feedback">
                    Por favor, introduce tu apellido.
                </div>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Por favor, introduce un correo electrónico válido.
                </div>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="invalid-feedback">
                    Por favor, introduce una contraseña.
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="terms" required>
                    <label class="form-check-label" for="terms">
                        Acepto los términos y condiciones
                    </label>
                    <div class="invalid-feedback">
                        Debes aceptar los términos y condiciones.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Registrarse</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Script para validación de formulario -->
    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>