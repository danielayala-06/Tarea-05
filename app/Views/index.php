<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficos</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="background-color: #f1f1f1;">
    <div class="container my-1 py-2 ">
        <h1 class="fw-ligth">Graficos</h1>
    </div>
    <main>
        
        <div class="container my-5 py-2 border-bottom shadow-sm">
            <h2 class="fw-ligth">Grafico 1</h2>
        </div>

        <div class="container border bg-ligther d-flex p-4 shadow">
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
                        <input type="reset" value="Reset" class="btn btn-outline-secondary">
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

        <div class="container border bg-ligther shadow">
            <div id="char-container" class="container">
                <canvas id="grafico-2"></canvas>
            </div>
        </div>
            
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.1/dist/chart.umd.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            // Referencia al grafico 1
            const chart1 = document.getElementById('grafico-1')

            // Referencia al formulario
            const form = document.getElementById('form-1')
            
            const data = obtenerDataForm() // Obtenemos los datos del formulario
            crearGrafico1(data) // Creamos el grafico 1 con los datos obten
            
            // Evento submit del formulario
            form.addEventListener("submit", function(e){
                e.preventDefault();// Detenemos el envio del formulario

                const data = obtenerDataForm() // Obtenemos los datos del formulario
                actualizarGrafico1(data) // Actualizamos el grafico 1 con los nuevos datos

            })

            function actualizarGrafico1(data){
                
                // Recorremos el array de datos y actualizamos el grafico
                grafico.data.datasets[0].data = data.map(fila=> fila.cont_usuarios)

                grafico.update()
            }

            /**
             * recibe un array de datos y crea el grafico 1
             * @param {Array} data - Array de datos para el grafico
             */
            function crearGrafico1(data){
                grafico = new Chart(chart1, {
                    type: 'bar',
                    data: {
                        labels: ['Python', 'PHP', 'Javascript', 'Java', 'Rust'],
                        datasets: [{
                            label: 'Cantidad de usuarios',
                            data: data,
                            backgroundColor: [
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(240, 112, 21, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ]
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                })
                grafico.update()
            }

            /**
             * Obtiene los datos del formulario y los retorna en un objeto
             * @returns {Object} - Objeto con los datos del formulario
             */
            function obtenerDataForm(){
                let valor1 = document.getElementById('valor1').value
                let valor2 = document.getElementById('valor2').value
                let valor3 = document.getElementById('valor3').value
                let valor4 = document.getElementById('valor4').value
                let valor5 = document.getElementById('valor5').value

                $data_json = [
                    {lenguaje: 'Python', cont_usuarios: valor1},
                    {lenguaje: 'PHP', cont_usuarios: valor2},
                    {lenguaje: 'Javascript', cont_usuarios: valor3},
                    {lenguaje: 'Java', cont_usuarios: valor4},
                    {lenguaje: 'Rust', cont_usuarios: valor5}
                ]
                
                return $data_json;
            }
        });
        
    </script>
</body>
</html>