@extends('layouts.admin')

@section('content')
   <div class="site-section">
      <div class="container">

         <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
               <h2 class="font-weight-light text-black display-4">Категории</h2>
            </div>
            <div class="col-md-7 text-center">
               <p>Пункт управления категориями</p>
            </div>
            <div class="col-md-7 text-right">
               <a href="#"><button type="button" class="btn btn-danger">Создать</button></a>
            </div>
         </div>

         <table class="table table-dark">
            <thead>
            <tr>
               <th>#</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Username</th>
               <th>Управление</th>
            </tr>
            </thead>
            <tbody>
            <tr>
               <th scope="row">1</th>
               <td>Mark</td>
               <td>Otto</td>
               <td>@mdo</td>

               <td>
                  <a href="#"><button type="button" class="btn btn-warning">Изменить</button></a>
               </td>
            </tr>
            <tr>
               <th scope="row">2</th>
               <td>Jacob</td>
               <td>Thornton</td>
               <td>@fat</td>

               <td>
                  <a href="#"><button type="button" class="btn btn-warning">Изменить</button></a>
               </td>

            </tr>
            <tr>
               <th scope="row">3</th>
               <td>Larry</td>
               <td>the Bird</td>
               <td>@twitter</td>

               <td>
                  <a href="#"><button type="button" class="btn btn-warning">Изменить</button></a>
               </td>

            </tr>
            </tbody>
         </table>
      </div>
   </div>
@endsection