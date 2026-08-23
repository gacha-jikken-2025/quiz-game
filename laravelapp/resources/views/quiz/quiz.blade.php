<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <script>
            addEventListener("load", (event) => {
                submitEvent();
                answerToggle();
            });

            const submitEvent = () => {    
                const form = document.getElementById("choiceSelectForm");

                form.addEventListener("submit", (event) => {
                    const radioCheckItem = document.querySelector('input[name="choice"]:checked');

                    // console.log(radioCheckItem);

                    if(!radioCheckItem) {
                        alert("選択されていません");
                        event.preventDefault();
                    }
                })
            }

            const answerToggle = () => {    
                const button = document.getElementById("answerToggle");

                button.addEventListener("click", (event) => {
                    const wrapper = document.getElementById("answerWrapper");
                    wrapper.classList.remove("hidden");
                    button.disabled = true;
                })
            }
        </script>
    </head>
    <body>
        <div class="container">
            <h1 class="main_title">
                <span>Q{{$question->question_id}}</span> {{$question->question_text}}
            </h1>
            <div class="main_content">
                <section class="section">
                    <h2 class="section_title">選択肢</h2>
                    <div class="section_content">
                        <form class="form" id="choiceSelectForm" action="/quiz/{{$question->question_id}}/submit" onSubmit="" method="POST">
                            @csrf
                            @foreach ($question->choices as $choice)
                                <div class="form_item">
                                    <input id="{{$choice->choice_id}}" value="{{$choice->choice_id}}" name="choice" type="radio" />
                                    <label for="{{$choice->choice_id}}">{{$choice->choice_text}}</label>
                                </div>
                            @endforeach
                            <button class="form_button button" id="submit" type="submit">回答を送信</button>
                        </form>
                    </div>
                </section>
                <section class="section">
                    <h2 class="section_title">答え</h2>
                    <div class="section_content">
                        <button type="button" class="button" id="answerToggle">
                            答えを表示する
                        </button>
                        <div class="answer hidden" id="answerWrapper">
                            <p>{{$correct_choice->choice_text}}</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>