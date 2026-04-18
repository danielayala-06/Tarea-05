<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficos</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-1 py-2 ">
        <h1 class="fw-ligth">Graficos</h1>
    </div>
    <main>
        
        <div class="container my-5 py-2 border-bottom shadow-sm">
            <h2 class="fw-ligth">Grafico 1</h2>
        </div>

        <div class="container border bg-ligther d-flex p-4">
            <div class="container w-25">
                <form id="form-1">
                    <div class="my-1">
                        <label for="valor1">Python</label>
                        <input type="number" class="form-control" name="valor1" id="valor1" max="500" min="0" required>
                    </div>
                    <div class="my-1">
                        <label for="valor2">PHP</label>
                        <input type="number" class="form-control" name="valor2" id="valor2" min="0" required>
                    </div>
                    <div class="my-1">
                        <label for="valor3">Javascript</label>
                        <input type="number" class="form-control" name="valor3" id="valor3" min="0" required>
                    </div>
                    <div class="my-1">
                        <label for="valor4">Java</label>
                        <input type="number" class="form-control" name="valor4" id="valor4" min="0" required>
                    </div>
                    <div class="my-1">
                        <label for="valor5">Rust</label>
                        <input type="number" class="form-control" name="valor5" id="valor5" min="0" required>
                    </div>
                    <div class="form-group text-end my-3">
                        <input type="reset" value="Cancelar" class="btn btn-outline-secondary">
                        <input type="submit" value="Enviar"  class="btn btn-outline-primary">
                    </div>
                </form>
            </div>
            <div id="char-container" class="container w-75">
                <canvas id="grafico-1"></canvas>
            </div>
        </div>
        
        <div class="container my-5 py-2 border-bottom shadow-sm">
            <h2 class="fw-ligth">Grafico 2</h2>
        </div>

        <div class="container border bg-ligther">
            <div id="char-container" class="container">
                <canvas id="grafico-2"></canvas>
            </div>
        </div>
            
    </main>

</body>
</html>