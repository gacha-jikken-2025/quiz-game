<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <h1 class="main_title check {{$result['check'] ? 'atari' : 'hazure'}}">
                {{$result["check"] ? "正解" : "不正解"}}
            </h1>
            <div class="main_content">
                <dl class="descriptionList">
                    <div class="descriptionList_item">
                        <dt class="descriptionList_item_title">
                            問題
                        </dt>
                        <dd class="descriptionList_item_detail">
                            {{$result["question"]->question_text}}
                        </dd>
                    </div>
                    <div class="descriptionList_item">
                        <dt class="descriptionList_item_title">あなたの回答</dt>
                        <dd class="descriptionList_item_detail">
                            {{$result["user_answer"]}}
                        </dd>
                    </div>
                    <div class="descriptionList_item">
                        <dt class="descriptionList_item_title">答え</dt>
                        <dd class="descriptionList_item_detail">
                            {{$result["answer"]}}
                        </dd>
                    </div>
                </dl>
                @if($result["question"]->question_id < 4)
                    <a class="nextpage button" href="/quiz/{{$result['question']->question_id + 1}}">次の問題</a>
                @else
                    <a class="nextpage button" href="/result">結果</a>
                @endif
            </div>
        </div>
    </body>
</html>