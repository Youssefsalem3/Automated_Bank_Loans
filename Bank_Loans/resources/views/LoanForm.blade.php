<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loan Registeration</title>
    <link rel="stylesheet" href="cssfiles/index.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

</head>

<body>
    <!---------Header--------->
    <div class="header-container">
        <h1>The Bank <i class='bx bxs-bank'></i></h1>
    </div>
    <!-------Info-------->
    <div class="info">
        <h1>Loan Request</h1>
        <p>Our bank is powered by the technology of Ai when you fill the form you will get a message instantly telling
            you the probability of your loan being accepted and if you are a candidate we will contact you as soon as
            possible</p>
    </div>

    <!---------Form--------->
    <div class="Form">
        <form method="post" action="{{ route('predict') }}" method="post">
            @csrf
            <div class="card-header">Loan Application</div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Age" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>






            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="married">Married</label>
                <select class="form-control" id="married" name="married" required>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dependents">Dependents</label>
                <select class="form-control" id="dependents" name="dependents" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="3+">3+</option>
                </select>
            </div>

            <div class="form-group">
                <label for="education">Education</label>
                <select class="form-control" id="education" name="education" required>
                    <option value="grad">Graduate</option>
                    <option value="undergrad">Undergraduate</option>
                </select>
            </div>

            <div class="form-group">
                <label for="self_employed">Self Employed</label>
                <select class="form-control" id="self_employed" name="self_employed" required>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="applicant_income">Applicant Income</label>
                <input type="number" class="form-control" id="applicant_income" name="applicant_income"
                    placeholder="Applicant Income" required>
            </div>

            <div class="form-group">
                <label for="coapplicant_income">Coapplicant Income</label>
                <input type="number" class="form-control" id="coapplicant_income" name="coapplicant_income"
                    placeholder="Coapplicant Income" required>
            </div>

            <div class="form-group">
                <label for="loanamount">Loan amount</label>
                <input type="number" class="form-control" id="loanamount" name="loanamount"
                    placeholder="loan amount" required>
            </div>

            <div class="form-group">
                <label for="loan_amount_term">Loan Amount Term</label>
                <input type="number" class="form-control" id="loan_amount_term" name="loan_amount_term"
                    placeholder="Loan Amount Term" required>
            </div>

            <div class="form-group">
                <label for="credit_history">Credit History</label>
                <select class="form-control" id="credit_history" name="credit_history" required>
                    <option value="1">Good</option>
                    <option value="0">Poor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="property_area">Property Area</label>
                <select class="form-control" id="property_area" name="property_area" required>
                    <option value="urban">Urban</option>
                    <option value="semiurban">Semiurban</option>
                    <option value="rural">Rural</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>




    </div>


<script>
 @if(isset($message))
        alert("{{$message}}");
        @endif

</script>

</body>

</html>
