from flask import Flask, render_template, request
import pickle
import pandas as pd

app = Flask(__name__)

# Load the trained model
with open('pipe.pkl', 'rb') as model_file:
    model = pickle.load(model_file)

# Create a route for the home page
@app.route('/')
def index():
    return render_template('login.html')

@app.route('/home')
def home():
    return render_template('index1.html')
    # User is not loggedin redirect to login page

@app.route('/about')
def about():
    # Check if user is loggedin
        
        # User is loggedin show them the home page
    return render_template('about.html')
    # User is not loggedin redirect to login page
@app.route('/contact')
def contact():
    # Check if user is loggedin
        
        # User is loggedin show them the home page
    return render_template('index.html')

@app.route('/',methods=['GET', 'POST'])
def login():
    msg = ''
    # Check if "username" and "password" POST requests exist (user submitted form)
    if request.method == 'POST' and 'username' in request.form and 'password' in request.form:
        # Create variables for easy access
        username = request.form['username']
        password = request.form['password']
        
                # If account exists in accounts table in out database
        if username=="admin" and password=="admin":
            # Create session data, we can access this data in other routes
            # Redirect to home page
            return render_template('index1.html')
        else:
            # Account doesnt exist or username/password incorrect
            msg = 'Incorrect username/password!'
    return render_template('login.html', msg=msg)


# Create a route for handling predictions
@app.route('/predict', methods=['POST'])
def predict():
    # Get input values from the form
    batting_team = request.form['batting_team']
    bowling_team = request.form['bowling_team']
    city = request.form['city']
    runs_left = float(request.form['runs_left'])
    balls_left = float(request.form['balls_left'])
    wickets_left = float(request.form['wickets_left'])
    current_run_rate = float(request.form['current_run_rate'])
    required_run_rate = float(request.form['required_run_rate'])
    target = float(request.form['target'])

    # Create a DataFrame with the input values
    input_data = pd.DataFrame({
        'BattingTeam': [batting_team],
        'BowlingTeam': [bowling_team],
        'City': [city],
        'runs_left': [runs_left],
        'balls_left': [balls_left],
        'wickets_left': [wickets_left],
        'current_run_rate': [current_run_rate],
        'required_run_rate': [required_run_rate],
        'target': [target]
    })

    # Ensure that the input categories are strings
    input_data['BattingTeam'] = input_data['BattingTeam'].astype(str)
    input_data['BowlingTeam'] = input_data['BowlingTeam'].astype(str)
    input_data['City'] = input_data['City'].astype(str)

    # Make the prediction
    prediction = model.predict(input_data)

    # Display the result
    result_text = 'Win' if prediction[0] == 1 else 'Lose'

    return render_template('result.html', result=result_text)

if __name__ == '__main__':
    app.run(debug=True)
