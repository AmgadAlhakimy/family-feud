<div>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Answer Entry Form</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap.min.css.map')}}" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
            }

            .form-container {
                margin-top: 30px;
                padding: 30px;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>

    <div class="container">
        <div class="form-container">
            <h2 class="text-center">Enter Your Answers</h2>
            <form>
                <div class="form-group">
                    <label for="question">Select a Question</label>
                    {{--                    <input type="text" class="form-control" id="question" placeholder="Type your question here..." >--}}
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                    @foreach($questions as $question)
                        <option value="{{$question->id}}">{{$question->name}}</option>
                    @endforeach
                    </select>
                </div>
                <!-- Loop for eight answers -->
                <div class="row mb-2">
                    <div class="col">
{{--                    <label for="answer1">Answer 1</label>--}}
                    <input name="name" type="text" class="form-control" id="answer1" placeholder="Type answer 1..." >
                    </div>
                    <div class="col">
{{--                    <label for="value1">Value 1</label>--}}
                    <input type="text" class="form-control" id="value1" placeholder="Type value 1..." >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
{{--                    <label for="answer2">Answer 2</label>--}}
                    <input type="text" class="form-control" id="answer2" placeholder="Type answer 2..." >
                    </div>
                    <div class="col">
{{--                    <label for="value2">Value 2</label>--}}
                    <input type="text" class="form-control" id="value2" placeholder="Type value 2..." >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
{{--                    <label for="answer3">Answer 3</label>--}}
                    <input type="text" class="form-control" id="answer3" placeholder="Type answer 3..." >
                    </div>
                    <div class="col">
{{--                    <label for="value3">Value 3</label>--}}
                    <input type="text" class="form-control" id="value3" placeholder="Type value 3..." >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
{{--                    <label for="answer4">Answer 4</label>--}}
                    <input type="text" class="form-control" id="answer4" placeholder="Type answer 4..." >
                    </div>
                    <div class="col">
{{--                    <label for="value4">Value 4</label>--}}
                    <input type="text" class="form-control" id="value4" placeholder="Type value 4..." >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
{{--                    <label for="answer5">Answer 5</label>--}}
                    <input type="text" class="form-control" id="answer5" placeholder="Type answer 5..." >
                    </div>
                    <div class="col">
{{--                    <label for="value5">Value 5</label>--}}
                    <input type="text" class="form-control" id="value5" placeholder="Type value 5..." >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
{{--                    <label for="answer6">Answer 6</label>--}}
                    <input type="text" class="form-control" id="answer6" placeholder="Type answer 6..." >
                    </div>
                    <div class="col">
{{--                    <label for="value6">Value 6</label>--}}
                    <input type="text" class="form-control" id="value6" placeholder="Type value 6..." >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit Answers</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</div>
