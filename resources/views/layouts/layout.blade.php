<!DOCTYPE html>
<html lang="en">
<head>

    <title>Akinator_Salon</title>
{{--    <link rel="stylesheet" type="text/css" href="css/estilo.css">--}}
    <meta charset="UTF-8">
    <meta name="author" content="https://francescricart.com/tutorial-css/"/>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
            src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/datatables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <style>
        body{
            padding-top: 3em;
            max-width: 40em;
            margin: auto;
            font-family: sans-serif;
            text-align: center;
        }

        /*.centrado{*/
        /*    text-align:center;border:1px dotted #000; padding:8px;*/
        /*}*/

        /*div{*/
        /*    width:50%;*/
        /*    border:1px dotted #f00;*/
        /*    padding:8px;margin:auto;*/
        /*}*/

        center{
            margin:16px 0;
        }

        .btn-success{
            background: #277721;
        }

        .btn-danger{
            background: #f32445;
        }

        .btn-warning{
            background: #f6e24e;
        }
        .btn-info{
            background: #5fdee3;
            color: white;
        }
        .btn-primary{
            background: #4d7cfc;
        }
        .btn-secondary{
            background: rgba(110, 103, 103, 0.8);
        }
    </style>

</head>


<body>
<header>
{{--   <h1 class="centrado">Akinator</h1>--}}
   <h1 >Akinator</h1>

</header>

<main>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @yield('contenido')
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>


