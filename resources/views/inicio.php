<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo_web51.png" />
    <title>ProyectosGradoUSJ</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <!-- Cabecera -->
    <header>
        <nav>
            <div class="logo">
                <a href="inicio.html"><img src="img/logo_web51.png" alt="Logo" style="height: 50px; right: 50px;"></a>
                <span>ProyectosGradoUSJ</span>
            </div>
            <div class="transparent-select-buscar" >
                <input type="text" id="searchInput" placeholder="Buscar...">
            </div>
            <ul class="menu">
                <li><a href="#" id="uploadProjectLink">Subir Proyecto</a></li>
                <li><a href="#" id="logoutLink">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Ventana modal para subir proyecto -->
    <div id="uploadModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Subir Proyecto</h2>
            <form id="uploadForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="projectTitle">Título del Proyecto:</label>
                    <input type="text" id="projectTitle" name="projectTitle" required>
                </div>
                <div class="form-group">
                    <label for="projectParticipants">Participantes:</label>
                    <input type="text" id="projectParticipants" name="projectParticipants" required>
                </div>
                <div class="form-group">
                    <label for="projectCareer">Carrera:</label>
                    <select id="projectCareer" name="projectCareer" required>
                        <option value="">Seleccionar...</option>
                        <option value="ingenieria-sistemas">Ingeniería de Sistemas</option>
                        <option value="ingenieria-industrial">Ingeniería Industrial</option>
                        <option value="administracion-empresas">Administración de Empresas</option>
                        <option value="contaduria-publica">Contaduría Pública</option>
                        <!-- Agrega más opciones de carreras aquí -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="academicCycle">Ciclo Académico:</label>
                    <select id="academicCycle" name="academicCycle" required>
                        <option value="">Seleccionar...</option>
                        <option value="tecnico">Técnico</option>
                        <option value="tecnologo">Tecnólogo</option>
                        <option value="profesional">Profesional</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="projectFile">Seleccionar archivo:</label>
                    <input type="file" id="projectFile" name="projectFile" required>
                </div>
                <div class="form-group">
                    <label for="projectDescription">Descripción:</label>
                    <textarea id="projectDescription" name="projectDescription" rows="3" placeholder="Ingrese una descripción del proyecto"></textarea>
                </div>
                <button type="submit" class="submit-btn">Subir</button>
            </form>
            <div id="uploadStatus"></div>
        </div>
    </div>

    <!-- Zona para poner información -->
    <main>
        <section class="documents-section">
            <h2>Documentos Subidos</h2>
            <ul id="documentList">
                <!-- Los documentos subidos se renderizarán aquí -->
            </ul>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; ProyectosGradoUSJ</p>
    </footer>

    <script src="Acciones/script.js"></script>
</body>
</html>