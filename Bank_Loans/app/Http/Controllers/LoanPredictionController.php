<?php

namespace App\Http\Controllers;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoanPredictionController extends Controller
{
function predict(Request $request){

    $formData = $request->all();

        // Send a POST request to the Flask API
        $response = Http::post('http://127.0.0.1:5000/predict', $formData);

        // Handle the response from the Flask API
        $predictions = $response->json();
        //The percentage
        $AcceptancePercantage=$predictions['percentage'];

        // Round the percentage to two decimal points and convert it to a string
        $percentageString = number_format($AcceptancePercantage, 2);


        //If the loan applicant is a candidate to have the loan then store his data to contact him
        if($AcceptancePercantage>50){
            Loan::create([
                "name" => $request->input('name'),
                "email"=>$request->input('email')
            ]);

            $message = "Congratulations, you are a candidate. Your loan might be accepted with a percentage of " . $percentageString ."%" . "You will get an email with the meeting time" . "!"  ;
            return view('LoanForm', ['message' => $message]);

        }

        else{
            $message = "Unfortunately you are not  candidate for this loan you can try to request again after a month";
            return view('LoanForm', ['message' => $message]);
        }
    }
}
