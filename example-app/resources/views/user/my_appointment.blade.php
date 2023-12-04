@include('include.top')

@include('include.spinner')

@include('include.bar')


<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">My Appointment</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class=""style="display:flex;font-size:30px">
                <li class="breadcrumb-item"><a class="text-black" href="home">Home/</a></li>
                <li class="breadcrumb-item"><a class="text-black" href="#">Pages/</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">My Appointment</li>
            </ol>
        </nav>
    </div>
</div>






<div class="section-title text-center">
    <h1 class="display-5 mb-5">Hello to you in our humble family. We hope to meet your expectations.</h1>
</div>





<div align="center" style="padding-top: 70px;">

    <table style="border: 1px black solid">

        <tr style="background: linear-gradient(rgba(216, 170, 218, 0.7),rgba(53, 53, 53, .7));color:whitesmoke;">

            <th style="padding: 10px;font-size:20px;">Doctor Name </th>
            <th style="padding: 10px;font-size:20px">Date </th>
            <th style="padding: 10px;font-size:20px">Time </th>

            <th style="padding: 10px;font-size:20px">Speciallity </th>

            <th style="padding: 10px;font-size:20px">Message </th>
            <th style="padding: 10px;font-size:20px">Status </th>
            <th style="padding: 10px;font-size:20px">Cancel Appointment </th>
            <th style="padding: 10px;font-size:20px">Send Feedback </th>


        </tr>

      @foreach ($appoint as $appoints)

          <tr style="background-color:rgb(245,245,245) ;color:black;"  align="center">

            <td style="padding: 10px;">{{$appoints->doctor}}</td>
            <td style="padding: 10px;">{{$appoints->date}}</td>
            <td style="padding: 10px;">{{$appoints->time}}</td>

            <td style="padding: 10px;">{{$appoints->speciality}}</td>
            <td style="padding: 10px;">{{$appoints->message}}</td>
            <td style="padding: 10px;">{{$appoints->status}}</td>
            <td> <a class="btn btn-danger" onclick="return confirm('are you sure to delete this')"
                 href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>

                 <td> <a class="btn btn-primary"
                    href="testimonial">Send Feedback</a></td>

          </tr>

      @endforeach

 </table>




</div><br>

<div style="text-align: center;font-size:x-large" >
    <p > We look forward to your feedback after your session</p>
    <button  > <a href="contact">    Contact</a></button>
</div>


@include('include.footer')



@include('include.bottom')


