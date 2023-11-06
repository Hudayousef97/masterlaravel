@include('include.top')

@include('include.spinner')

@include('include.bar')


<div align="center" style="padding-top: 70px;">

    <table style="border: 1px black solid">

        <tr style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7));color:whitesmoke;">

            <th style="padding: 10px;font-size:20px;">Doctor Name </th>
            <th style="padding: 10px;font-size:20px">Date </th>
            <th style="padding: 10px;font-size:20px">Message </th>
            <th style="padding: 10px;font-size:20px">Status </th>
            <th style="padding: 10px;font-size:20px">Cancel Appointment </th>


        </tr>

      @foreach ($appoint as $appoints)

          <tr style="background-color:rgb(245,245,245) ;color:black;"  align="center">

            <td style="padding: 10px;">{{$appoints->doctor}}</td>
            <td style="padding: 10px;">{{$appoints->date}}</td>
            <td style="padding: 10px;">{{$appoints->message}}</td>
            <td style="padding: 10px;">{{$appoints->status}}</td>
            <td> <a class="btn btn-danger" onclick="return confirm('are you sure to delete this')"
                 href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>

          </tr>

      @endforeach

 </table>




</div>




@include('include.footer')

@include('include.bottom')


