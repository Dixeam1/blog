@extends('layouts.app')

@section('content')
<div class="container">
  <div class="alert-success" style="
  display: flex;
  align-items: center;
  font-size: larger;">
  <div class="ml-3" >
    {{session('msg')}}
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Discription</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 

        $i = 1;

        ?>
        
        @foreach($employeeArr as $employee)
        <tr>
          <th>{{$i++}}</th>
          <td style="width: 250px;">{{$employee->name}}</td>
          <td style="width: 1000px;">{{$employee->discription}}</td>
          <td style="width: 200px; font-size: 25px;" >
           <a class="text-danger"  href="delete/{{$employee->id}}"><i class="fa-solid fa-trash"></i></a>
           <a class="ml-3" href="edit/{{$employee->id}}"><i class="fa-solid fa-edit"></i></a>
         </td>
       </tr>
       @endforeach

     </tbody>
   </table>
 </div>
</div>
</div>
@endsection
