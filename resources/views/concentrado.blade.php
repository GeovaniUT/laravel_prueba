@extends('template')

@section('title', 'Concentrado de Calificaciones')

@section('header')

    <div class="header">
        <ul class="display">
            <li>Julio</li>
            <li>Carmen</li>
            <li>Ignacio</li>
          </ul>
    </div>

@endsection

@section('content')
    <style>
        html {
          font-family: sans-serif;
        }
  
        table {
          border-collapse: collapse;
          border: 4px solid rgb(200, 200, 200);
          letter-spacing: 1px;
          font-size: 1.2rem;
        }
  
        td,
        th {
          border: 2px solid rgb(190, 190, 190);
          padding: 10px 20px;
        }
  
        th {
          background-color: rgb(235, 235, 235);
        }
  
        td {
          text-align: center;
        }
  
        tr:nth-child(even) td {
          background-color: rgb(250, 250, 250);
        }
  
        tr:nth-child(odd) td {
          background-color: rgb(245, 245, 245);
        }
  
        caption {
          padding: 10px;
        }
  
        tbody {
          font-size: 90%;
          font-style: italic;
        }
  
        tfoot {
          font-weight: bold;
        }
      </style>
    <table>
        <caption>
          Concentrado de Calificaciones
        </caption>
        <thead>
          <tr>
            <th>Matricula</th> 
            <th>Nombre</th>
            <th>Promedio Preliminar</th>
            <th>Calificacion Preliminar</th>
            <th>Participacion</th>
          </tr>
        </thead>
        {{-- <tfoot>
          <tr>
            <td colspan="4">SUM</td>
            <td>118</td>
          </tr>
        </tfoot> --}}
        <tbody>
          <tr>
            <td>22393178</td>
  
            <td>Geovani Guzman</td>
            <td>94</td>
  
            <td>DE</td>
            <td>100%</td>
          </tr>
          <tr>
            <td>22393180</td>
  
            <td>Sergio Antonio</td>
            <td>79</td>
            <td>NA</td>
            <td>10%</td>
          </tr>
          <tr>
            <td>22393179</td>
            <td>Fernando Toledo</td>
            <td>87</td>
            <td>SA</td>
            <td>65%</td>
          </tr>
          <tr>
            <td>22393181</td>
            <td>Max Quintero</td>
            <td>92</td>
  
            <td>DE</td>
            <td>90%</td>
          </tr>
        </tbody>
      </table>
@endsection



