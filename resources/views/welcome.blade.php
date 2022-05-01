<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container pt-5">
        <form action="{{ route('car.store') }}" method="POST">
            @csrf
            <div class="row py-5">
                    <div class="col-3">
                        <input type="text" required class="form-control" name="nombre">
                    </div>
                    <div class="col-3">
                        <select name="destinos_id" required class="form-control">
                            @foreach ($destinos as $value)
                                <option value="{{$value->id}}">
                                    {{ $value->ciudad }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3">
                        <select name="destinatarios_id" required class="form-control">
                            @foreach ($destinatarios as $value)
                                <option value="{{$value->id}}">
                                    {{ $value->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
            </div>
        </form>

        <div class="row pt-5">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Clasification Track</th>
                            <th>Name of Car</th>
                            <th>Destination</th>
                            <th>Receiver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registros as $registro)
                            <tr>
                                <td>
                                    {{ $registro['clasificacion'] }}
                                </td>
                                <td>
                                    {{ $registro['nombre'] }}
                                </td>
                                <td>
                                    {{ $registro['destino'] }}
                                </td>
                                <td>
                                    {{ $registro['destinatario'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
