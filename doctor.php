
<?php


$conn = mysqli_connect('localhost','root','','LoginSystem');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Doctor</title>





<link rel="stylesheet" href="C:\Users\DCL\Desktop\web work\drop down menu\css\fontawesome.min.css">

   <link rel="stylesheet" href="C:\Users\DCL\Desktop\web work\drop down menu\css\all.min.css">

   <link rel="stylesheet" href="C:\Users\DCL\Desktop\web work\drop down menu\css\normalize.css">



      

   <link rel="stylesheet" href="css/bootstrap.min.css">

   <link rel="stylesheet" href="css/bootstrap-grid.min.css">


   <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
 





   <style>

      body{
         background:#F0F0F5 ;
         margin:0px;
         padding: 0px;

      }
      .mid{
         width: 80%;
         margin: auto;

      }
      .box1{
         width: 100%;
         height: 250px;
         background: #ADE7FF;
         margin-top: 10px;

      }
      .circle1{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d1.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle2{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d2.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle3{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d3.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle4{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d4.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle5{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d5.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle6{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d6.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle7{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d7.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle8{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d8.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle9{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d9.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle10{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d10.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle11{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d11.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle12{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d12.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }

      .circle13{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d13.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      }
      .circle14{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d1.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }

      .circle15{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d2.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle16{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d6.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle17{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d4.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle18{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d5.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }.circle19{
         border:1px solid white;
         border-radius: 50%;
         background-image: url(images/d9.jpg);
         background-position: center;
         -webkit-background-size: 97% 99%;
         background-size: 97% 99%;
         height: 200px;
         width: 300px;
         margin-left: 20px;
         margin-top: 20px;
         float: left;
      

      }

      h4{
         
      
         text-align: center;
         margin: auto;
         padding: 6px 7px 0px 3px;
         color: #4b4b4b;
         
        


      }

      .call{
         padding: 10px 25px;
         background: #F26522;
         border-radius: 5px;
         border-radius: 1px solid #F26522;



      }

      .call a{
         text-decoration: none;
      }



.bottom-fotter{
   background-color:#7F7FFF; 
   padding: 10px 0px;
}  

.bottom-fotter p{
   color:white;
   text-align: center;
   font-size: 12px;

}
h1{
   text-align: center;
   

}


      
   </style>
</head>

<body>
    

 
 <h1>Doctore Profile</h1>



  <!--  <div class="container">
  <h2>CURD TABLE</h2>
              
  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Zilani</td>
        <td>z1@gmail.com</td>
        <td>1234</td>
      </tr>
      <tr>
        <td>mojib</td>
        <td>m1@gmail.com</td>
        <td>1234</td>
      </tr>
      <tr>
        <td>saif</td>
        <td>s1@gmail.com</td>
        <td>1234</td>
      </tr>
    </tbody>
  </table>
</div> -->
 

   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <a class="btn-btn-info" href="insert.php">New Doctor</a>
         </div>
         <div class="col-md-4">
            <table class="table">
               <thead>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  
               </thead>
               <tbody>
                  <?php
                    while($row = mysqli_fetch_assoc($result)) { ?>
                

                 
                  <tr>
                     <td><?php echo $row['id']?></td>
                     <td><?php echo $row['username']?></td>
                     <td><?php echo $row['email']?></td>
                     <td><?php echo $row['password']?></td>
                     <!-- <td><?php echo $row['create_datetime']?></td>
 -->
                     <td>
                        <a class="btn-btn-info" href="show.php?id=<php echo $row['id'];?>">View</a>
                        <a class="btn-btn-info" href="#">Edit</a>
                        <a class="btn-btn-info" href="delete.php?id=<php echo $row['id'];?>">Delet</a>
                     </td>
                  </tr>
                  <?php } ?>
                   <!-- <tr>
                     <td>mojib</td>
                     <td>z@gmail.com</td>
                     <td>1234</td>
                     <td>
                        <a class="btn-btn-info" href="#">View</a>
                        <a class="btn-btn-info" href="#">Edit</a>
                        <a class="btn-btn-info" href="#">Delet</a>
                     </td>
                  </tr>
                   <tr>
                     <td>saif</td>
                     <td>z@gmail.com</td>
                     <td>1234</td>
                     <td>
                        <a class="btn-btn-info" href="#">View</a>
                        <a class="btn-btn-info" href="#">Edit</a>
                        <a class="btn-btn-info" href="#">Delet</a>
                     </td>
                  </tr> -->
               </tbody>
            </table>
            
         </div>
      </div>
   </div>






















   <div class="gellary">

      <div class="mid">
        
        <div class="box1">
         
         <div class="circle1">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>

      <div class="mid">
        
        <div class="box1">
         
         <div class="circle2">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle3">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle4">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle5">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle6">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle7">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle8">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>





      <div class="mid">
        
        <div class="box1">
         
         <div class="circle9">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>




      <div class="mid">
        
        <div class="box1">
         
         <div class="circle10">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>




      <div class="mid">
        
        <div class="box1">
         
         <div class="circle11">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle12">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle13">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>


      <div class="mid">
        
        <div class="box1">
         
         <div class="circle14">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle15">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle16">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle17">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>



      <div class="mid">
        
        <div class="box1">
         
         <div class="circle18">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>




      <div class="mid">
        
        <div class="box1">
         
         <div class="circle19">
            

         </div>
         
         <h4>Name :Dr. Md. Kais Haider Chowdhury</h4>
         <h4>Dhaka Medical Hospital</h4>
         <h4>Degree : MBBS, FCPS, FRCP .</h4>
         <h4>Type:General Practitioner .</h4>

         <button class="call"><a href="http://localhost/project/registration.php">Phone Call</a></button>

         <button class="call"><a href="http://localhost/project/registration.php">Video Call</a></button>
         

        </div>


      </div>





     
  <script src="js/jquery-1.11.3.min.js"></script>


  <script src="js/bootstrap.min.js"></script>

  <script src="js/bootstrap.bundle.min.js"></script>














 



<div class="bottom-fotter">
      <p>@ All right reserve by ZILAN-IT</p>
     </div>


   </div>


   
   
</body>
</html>

