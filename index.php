<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
        button{
                position: relative;
                display: inline-block;
                padding: 10px 26px;
                margin: 5px 0;
                color: #fff;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 18px;
                letter-spacing: 2px;
                border-radius: 8px;
                background-color:LightSteelBlue;
        }
        body{
            background-color: #E0F8F7;
            margin-top: 15px;}
            .btn {
                  border: 1px solid black;
                  background-color: white;
                  color: black;
                  padding: 14px 28px;
                  font-size: 16px;
                  cursor: pointer;
                  margin: 5px;
                } 
                .df:hover {
                    color: white;
                    font-size: 16px;
                    background-color: LightSteelBlue;
                }
                .img-fluid{
                    height: 345px ;
                    width: 1655px;
                }
                footer {
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;

                    text-align: center;
                }


        </style>
</head>


<body>

    <div class="container-fluid">
        <div class="intro">
            <div >
                <div>
                   <center> <h1>Bank Of Spark</h1></center>
                </div>
                
            </div>   
        </div>
                <a class="btn df" class="nav-link" href="index.php">Home</a>
                
                <a class="btn df" class="nav-link" href="aboutbank.php">About Bank</a>

        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
               <img src="img/customer1.jpg" class="img-fluid" >
                <br><br>
                <a href="view-user.php"><button>View Users</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/transfer2.jpg" class="img-fluid">
                <br><br>
                <a href="transfer-money.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/history1.jpg" class="img-fluid">
                <br><br>
                <a href="view-history.php"><button >View History</button></a>
            </div>
        </div>
    </div>
    
    
    <footer class="text-center mt-5 py-2">
        <p> <br> Shrey Savani |<b> Basic Banking System</b></p>
    </footer>
</body>

</html>
