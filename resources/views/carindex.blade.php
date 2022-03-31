<div>
    <form action="/car" method="get">
        @method('get')
        <input type="text" name="searh_key" placeholder="Search">
        <button type="submit">sub</button>
    </form>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/updateallcars" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input type="file" name="filesTest" required="true">
    <br/>
    <input type="submit" value="upload">
</form>


<table class="table table-hover">
 <thead>
  <tr>
   <th>user id</th>
   <th>name</th>
   <th>check</th>
   <th>img</th>
  </tr>
 </thead>
 <tbody>
    <form action="/deletecheckedcars" method="POST">
        <button type="submit">del checked</button>
        <button type="submit" formaction="/updateallcars" >Update</button>
            @foreach($cars as $car)
                <tr>
                    <td>{{$car->user_id}} </td>
                    <td>{{$car->name}}   </td>
                    <td><input type="checkbox" name="{{$car->name}}" value="{{$car->id}}"></td>
                    <td><input type="file" id="{{$car->id}}" name="{{$car->id}}" accept="image/*"></td>
                </tr>
            @endforeach
    </form>
 </tbody>
</table>