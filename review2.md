# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されている
```
<input type="hidden" name="_method" value="PUT">
```

### findメソッドの引数に指定しているIDは何のIDか
* todosテーブルから取得したい行のID。
* BladeファイルからRoutingを経由して渡される。

### findメソッドで実行しているSQLは何か
```
SELECT * FROM todos WHERE id = 5 LIMIT 1;
```

### findメソッドで取得できる値は何か
* findメソッドの引数IDと一致するtodosテーブルのレコードを持つオブジェクト

### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
* INSERT：todoオブジェクトのIDがnull or TODOテーブルに同IDがないとき。
* UPDATE：todoオブジェクトのIDと同じIDを持つレコードがTODOテーブルにある時。

## Todo論理削除

### traitとclassの違いとは
* trait：複数のトレイトを同時に使える・インスタンス化できない・trait単体では使用できない
* class：クラスの継承は1つしか使えない・インスタンス化できる・class単体で使用できる

### traitを使用するメリットとは
* classの継承は1つのクラスしかできないが、トレイトは1つのクラスで複数のトレイトを使用できる。

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
* Routingから初めてTodoControllerが呼ばれたとき。
* （一覧画面を初めて表示したとき）

### RequestクラスからFormRequestクラスに変更した理由
* バリデーションを実装するため。

### $errorsのhasメソッドの引数・返り値は何か
* 引数：エラーの種類
* 返り値：エラーがあった場合true、エラーがない場合false

### $errorsのfirstメソッドの引数・返り値は何か
* 引数：エラーの種類
* 返り値：最初に発生したエラーメッセージを表示

### フレームワークとは何か
* アプリケーションサーバの設計に注力するために周りのロジックを提供している。

### MVCはどういったアーキテクチャか
* Model, View, Controller, Routingとファイルを分けることで、再利用性・可読性を上げる。

### ORMとは何か、またLaravelが使用しているORMは何か
* SQL文を書かずに、クラスを使用してデータベールを操作できるもの
* LaravelのORMはEloquent

### composer.json, composer.lockとは何か
* composer.json：プロジェクトで利用するパッケージを記述する。
* composer.lock：プロジェクト開発で実際にインストールされたパッケージのバージョンが記録される。

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
```
src/vendor
```