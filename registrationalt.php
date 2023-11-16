<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Register Now</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h4 class="bg-primary text-white text-center py-3">Get In Touch!</h4>
                    </div>
                    <div class="card-body">

                        <form class="form-control">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" id="title" placeholder="Title" class="form-control my-2">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="fname" placeholder="Firstname" class="form-control my-2">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="lname" placeholder="Lastname" class="form-control my-2">
                                </div>
                            </div>
                            <input type="email" id="email" placeholder="Email" class="form-control mb-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="orgcountry" placeholder="Country of Origin" class="form-control mb-2">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="arrstate" placeholder="State of Arrival" class="form-control mb-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="arrdate">Date of Arrival</label>
                                    <input type="date" id="arrdate" placeholder="Date of Arrival" class="form-control mb-2">
                                </div>
                                <div class="col-md-6">
                                    <label for="depdate">Date of Departure</label>
                                    <input type="date" id="depdate" placeholder="Date of Departure" class="form-control mb-2">
                                </div>
                            </div>
                            <div class="row">
                            <span>Number of Companions</span>
                                <div class="col-md-3">
                                    <!-- <select id="infant" placeholder="Infant" class="form-control mb-2">
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                        <option value="6">5</option>
                                    </select> -->
                                    <select id="infant" placeholder="Infants" class="form-control mb-2">
                                        <option value="infant" selected>--Select no. of infants (0-2yrs)--</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                        <option value="6">5</option>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <!-- <input type="number" id="child" placeholder="Children" class="form-control mb-2"> -->
                                    <select id="child" placeholder="Children" class="form-control mb-2">
                                        <option value="children" selected>--Select no. of children 3-13yrs)--</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                        <option value="6">5+</option>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <!-- <input type="number" id="teens" placeholder="Teenagers" class="form-control mb-2"> -->
                                    <select id="child" placeholder="Children" class="form-control mb-2">
                                        <option value="children" selected>--Select no. of teens(14-19yrs)--</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                        <option value="6">5+</option>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <!-- <input type="number" id="adult" placeholder="Adults" class="form-control mb-2"> -->
                                    <select id="adult" placeholder="Adults" class="form-control mb-2">
                                        <option value="adults" selected>--Select no. of adults(20+ yrs)--</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="4">3</option>
                                        <option value="5">4</option>
                                        <option value="6">5+</option>
                                    </select>
                                </div>
                            </div>
                            <select id="budget" placeholder="Budget range" class="form-control mb-2">
                                <option value="budget" selected>--Select Budget Range in Naira--</option>
                                <option value="1">500,000 - 1,000,000</option>
                                <option value="2">1,000,000 - 1,500,000</option>
                                <option value="3">1,500,000 - 2,000,000</option>
                                <option value="4">2,000,000 - 2,500,000</option>
                                <option value="5">2,500,000 - 3,000,000</option>
                                <option value="6">> 3,000,000</option>
                            </select>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <p>Do you require accomodation ?</p>
                                    <br>
                                    <input type="radio" id="paccommodation" value="yes">
                                    <label for="paccommodation">yes</label><br>
                                    <input type="radio" id="naccommodation" value="no">
                                    <label for="naccommodation">no</label><br>
                                </div>
                                <div class="col-md-3">
                                    <p>Do you require transportation services ?</p>
                                    <input type="radio" id="paccommodation" value="yes">
                                    <label for="paccommodation">yes</label><br>
                                    <input type="radio" id="naccommodation" value="no">
                                    <label for="naccommodation">no</label><br>
                                </div>
                                <div class="col-md-3">
                                    <p>Do you require specific tour activities ?</p>
                                    <input type="radio" id="paccommodation" value="yes">
                                    <label for="paccommodation">yes</label><br>
                                    <input type="radio" id="naccommodation" value="no">
                                    <label for="naccommodation">no</label><br>
                                </div>
                                <div class="col-md-3">
                                    <p>Do you have any health complications ?</p>
                                    <input type="radio" id="paccommodation" value="yes">
                                    <label for="paccommodation">yes</label><br>
                                    <input type="radio" id="naccommodation" value="no">
                                    <label for="naccommodation">no</label><br>
                                </div>
                            </div>
                            <input type="text" id="lang" placeholder="preferred languages" class="form-control mb-2">
                            <select id="langs" class="form-control mb-2">
                                <option value="yoruba">Yoruba</option>
                            </select>
                        <input type="textarea" id="msg" placeholder="Other Information" class="form-control mb-2">
                            <button type="button" id="submit" class="btn btn-success">Submit</button>
                        </form>
                        <span id="successMsg"></span>


                        <!-- <form>
                            <input type="text" id="user" placeholder="Fullname" class="form-control my-2">
                            <input type="text" id="email" placeholder="Email" class="form-control mb-2">
                            <input type="text" id="health" placeholder="Message" class="form-control mb-2">
                            <button type="button" id="btn" class="btn btn-success">Submit</button>
                        </form>
                        <div id="msg"></div> -->
                        <!-- <form action="process.php" method="post">
                            <input type="text" name="name" placeholder="Fullname" class="form-control my-2">
                            <input type="text" name="email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="language" placeholder="Spoken languages" class="form-control mb-2">
                            <input type="number" name="pplcnt" placeholder="Number of people" class="form-control mb-2">
                            <input type="number" name="budget" placeholder="Budget range" class="form-control mb-2">
                            <input type="text" name="activities" placeholder="Interested Activities" class="form-control mb-2">
                            <input type="text" name="health" placeholder="Health Considerations" class="form-control mb-2">
                            <button name="submit" class="btn btn-success">Submit</button>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <script src="js/jquery.js"></script>
    <script src="js/registerjs.js"></script>
</body>
</html>