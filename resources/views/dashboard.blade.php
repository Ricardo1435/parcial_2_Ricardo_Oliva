@extends('app')
@section('content')
   <div id="crud" class="row">

       <div class="container-md">
           <a href="#" class="btn btn-primary text-start mb-2 mt-2" data-toggle="modal" data-target="#create">Nuevo</a>
           <table class="table table-striped table-bordered m-auto">
               <thead class="thead-dark">
               <tr>
                   <th colspan="7"><h5><center>LIBROS</center></h5></th>
               </tr>
               <tr>
                   <th scope="col"><center>ID</center></th>
                   <th scope="col"><center>ISBN</center></th>
                   <th scope="col"><center>NOMBRE</center></th>
                   <th scope="col"><center>FECHA</center></th>
                   <th scope="col"><center>EDICION</center></th>
                   <th scope="col"><center>DESCRIPCION</center></th>

                   <th scope="col"><center>OPCIONES</center></th>
               </tr>
               </thead>
               <tbody>
               <tr v-for="book in books" :key="book.id">
                   <td><center>@{{ book.id }}</center></td>
                   <td><center>@{{ book.isbn }}</center></td>
                   <td><center>@{{ book.name }}</center></td>
                   <td><center>@{{ book.date }}</center></td>
                   <td><center>@{{ book.edition }}</center></td>
                   <td><center>@{{ book.description }}</center></td>

                   <td class="text-center">
                       <a href="#" class="btn btn-warning btn-sm" >Editar</a>
                       <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteBook(book)">Eliminar</a>                   </td>
               </tr>
               </tbody>
           </table>
           @include('create')

       </div>
   </div>
@endsection
