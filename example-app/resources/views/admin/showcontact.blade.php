<!DOCTYPE html>
<html lang="en">
  <head>
@include ('admin.css')

    </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include ('admin.sidebar')


      @include ('admin.navbar')

        <!-- partial -->
        <div class="container mt-5">
            <div>
                <h1 class="fs-1 text-black font-weight-bold" style="margin-top:3%;margin-right:2%" >Contact </h1>
</div>
<br>
<hr>

            <div align="center" style="padding:100px;color:black">
                <table style="border: 1px black solid" id="myDataTable">
                    <thead>
                    <tr style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7));color:whitesmoke;">
                        <th style="padding: 10px;font-size:20px;text-align:center">Customer Name  </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Email </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Subject </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Message </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Send Mail </th>
                        <th style="padding: 10px;font-size:20px;text-align:center"> Delete </th>




                    </tr>
                    </thead>
                    <tbody>
               @foreach($data as $contact)

                    <tr style="background-color:rgb(245,245,245) ;color:black;"  align="center">
                        <td style="padding: 10px;">{{$contact->name}}</td>
                        <td style="padding: 10px;">{{$contact->email}}</td>
                        <td style="padding: 10px;">{{$contact->subject}}</td>
                        <td style="padding: 10px;">{{$contact->message}}</td>

                        <td> <a class="btn btn-primary" href="{{url('emailview2',$contact->id)}}">Send Mail</a></td>
                        <td> <a class="btn btn-danger" onclick="return confirm('are you sure to delete this')"  href="{{url('deleteContact',$contact->id)}}">Delete</a> </td>


                    </tr>
                @endforeach
                    </tbody>
                </table>

            </div>


        </div>

    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
