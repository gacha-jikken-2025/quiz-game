<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <h1 class="main_title center">
                結果
            </h1>
            <div class="main_content">
                @foreach ($answers as $key => $answer)
                <dl class="descriptionList">
                    <div class="descriptionList_item">
                        <dt class="descriptionList_item_title">Q{{$key}}</dt>    
                        <dd class="descriptionList_item_detail">{{$answer["check"] ? "〇" : "×"}}</dd>
                    </div>
                    <div class="descriptionList_item">
                        <dt class="descriptionList_item_title">問題文</dt>
                        <dd class="descriptionList_item_detail">{{$answer["question"]["question_text"]}}</dd>
                    </div>
                    <div class="descriptionList_item">
                        <dt class="descriptionList_item_title">あなたの回答</dt>
                        <dd class="descriptionList_item_detail">{{$answer["user_answer"]}}</dd>
                    </div>
                </dl>
                @endforeach
                <a class="backtop button" href="/quiz/1">最初の問題へ戻る</a>
            </div>
        </div>
    </body>
</html>