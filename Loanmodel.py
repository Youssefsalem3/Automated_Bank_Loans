import joblib
import json
from flask import Flask, request, jsonify
from sklearn.preprocessing import StandardScaler
import numpy as np

# Load the Logistic Regression model from the joblib file
loaded_model = joblib.load('C:\\Users\\20109\\Downloads\\loan_model.joblib2')
# Create a Flask app
app = Flask(__name__)

# Define a route to handle predictions
@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Get data from the request
        data = request.get_json()

        # Define a mapping for categorical to numerical values
        categorical_mapping = {
            'gender': {'male': 0, 'female': 1},
            'married': {'no': 0, 'yes': 1},
            'dependents': {'0': 0, '1': 1, '2': 2, '3+': 3},
            'education': {'undergrad': 0, 'grad': 1},
            'self_employed': {'no': 0, 'yes': 1},
            'property_area': {'urban': 0, 'rural': 1, 'semiurban': 2}
        }

        # Preprocess the data
        for column, mapping in categorical_mapping.items():
            if column in data:
                data[column] = mapping[data[column]]

        # Convert data to a format expected by the model
        data_array = [data['gender'], data['married'], data['dependents'], data['education'], data['self_employed'],
                      data['applicant_income'], data['coapplicant_income'], data['loanamount'], data['loan_amount_term'],
                      data['credit_history'], data['property_area']]
        data_array = [float(x) for x in data_array]  # Ensure data types are appropriate for your model
        # Convert data_array to a 1D numpy array

      # Make predictions using the loaded model
        data_array = np.array(data_array).reshape(1, -1)  # Reshape data to 2D
        probabilities = loaded_model.predict_proba(data_array)

        # Convert the model's output to a percentage (probability of class 1)
        percentage = probabilities[0][1] * 100


        # Return the percentage as JSON
        return jsonify({'percentage': percentage})

    except Exception as e:
        return jsonify({'error': str(e)})

if __name__ == '__main__':
    app.run(debug=True)
