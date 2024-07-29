<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <div class="container">

        <div class="row">

            <div class="col-12 text-center text-danger">
                <h1>My Product</h1>

            </div>

            <div class="col-12">
                <div class="row">

                    <div class="offset-1 col-2 mt-5">
                        <div class="card" style="width: 18rem;">
                            <img src="resources/iphone_11.jpeg" class="card-img-top" style="height: 300px;">
                            <div class="card-body">
                                <h5 class="card-title">Iphone 11</h5>
                                <p class="card-text">Price : 175,000/- LKR</p>
                                <a href="#" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>

                    </div>



                    <div class="offset-1 col-2 mt-5 ">
                        <div class="card" style="width: 18rem;">
                            <img src="resources/iphone_x.jpeg" class="card-img-top" style="height: 300px;">
                            <div class="card-body">
                                <h5 class="card-title">Iphone X</h5>
                                <p class="card-text">Price : 140,000/- LKR</p>
                                <a href="#" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>

                    </div>


                    <div class="offset-1 col-2 mt-5">
                        <div class="card" style="width: 18rem;">
                            <img src="resources/Galaxy Z Fold_0_6595acb467918.jpeg" class="card-img-top" style="height: 300px;">
                            <div class="card-body">
                                <h5 class="card-title">Galaxy Z Fold 0</h5>
                                <p class="card-text">Price : 238,000/- LKR</p>
                                <a href="#" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>

                    </div>

                    <div class="offset-1 col-2 mt-5 ">
                        <div class="card" style="width: 18rem;">
                            <img src="resources/Galaxy Z Fold_1_6595acb46844f.jpeg" class="card-img-top" style="height: 300px;">
                            <div class="card-body">
                                <h5 class="card-title">Galaxy Z Fold 1</h5>
                                <p class="card-text">Price : 35,000/- LKR</p>
                                <button class="btn btn-primary" type="submit" id="payhere-payment" onclick="buynow();">PayHere Pay</button>
                            </div>
                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>


    <script src="script.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
</body>

</html>