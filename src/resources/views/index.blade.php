<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<style>



.header__logo {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    text-decoration: none;
}
  
.name-group {
    display: flex;
    gap: 15px;
    justify-content: flex-start;
}

.name-field {
    flex: 1;
}

.name-field .form__input {
    width: 100%;
}


.form__label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

.form__label--required::after {
    content: "※";
    color: red;
    margin-left: 4px;
}

.form__input {
    width: 100%;
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
}
 
.gender-group {
  display: flex;
  gap: 20px;
  margin-top: 10px;
 }

 .gender-label {
    display: flex;
    align-items: center;
    
    }

  .gender-input {
    margin-right: 8px;
   }
 
  .tel-group {
    display: flex;
    gap: 10px;
    align-items: center;
  }

  .tel-input {
     flex: 1;
     text-align: center;
  }

  .tel-separator {
    color: #666;
  }

        
  .form__button {
    text-align: center;
    margin-top: 40px;
  }

  .form__button-submit {
   background: #007bff;
   color: white;
   padding: 15px 60px;
   border: none;
   border-radius: 4px;
   font-size: 18px;
           
    }

  .form__button-submit:hover {
   background: #0056b3;
  }


</style>

<body>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
       
       <div class="form__group">
        <label class="form__label form__label--required">お名前</label>
    <div class="name-group">
        <div class="name-field">
            <input type="text" name="last_name" class="form__input" placeholder="姓（例: 山田）" required>
            
        </div>
        <div class="name-field">
            <input type="text" name="first_name" class="form__input" placeholder="名（例: 太郎）" required>
           
        </div>
    </div>
</div>
            
            </div>
  <div class="form__group">
      <label class="form__label form__label--required">性別</label> 
    <div class="gender-group">
      <label class="gender-label">
        <input type="radio" name="gender" value="男性" class="gender-input" required>
          男性
      </label>
      <label class="gender-label">
        <input type="radio" name="gender" value="女性" class="gender-input" required>
          女性
      </label>
      <label class="gender-label">
        <input type="radio" name="gender" value="その他">
          その他
      </label>
    </div>
  </div>
  <div class="form__group">
      <label class="form__label form__label--required">メールアドレス</label> 
       <input type="email" name="email" class="form__input" placeholder="info@example.com" required>
  </div>

      
  <div class="form__group">
      <label class="form__label form__label--required">電話番号</label>
          <div class="tel-group">
              <input type="tel" name="tel1" class="form__input    tel-input" maxlength="3" placeholder="000" required>
              <span class="tel-separator">-</span>
              <input type="tel" name="tel2" class="form__input tel-input" maxlength="4" placeholder="0000" required>
              <span class="tel-separator">-</span>
              <input type="tel" name="tel3" class="form__input tel-input" maxlength="4" placeholder="0000" required>
           </div>
  </div>

              
  <div class="form__group">
      <label class="form__label form__label--required">住所</label>
        <input type="text" name="address" class="form__input" placeholder="東京都港区千秋小野6-3" required>
  </div>

                
  <div class="form__group">
      <label class="form__label">建物名</label>
        <input type="text" name="building" class="form__input" placeholder="千秋小野マンション2階">
  </div>

                
  <div class="form__group">
      <label class="form__label form__label--required">お問い合わせの種類</label>
          <select name="category_id" class="form__input" required>
              <option value="">選択してください</option>
              <option value="1">商品について</option>
              <option value="2">サービスについて</option>
              <option value="3">交換について</option>
              <option value="4">その他</option>
          </select>
  </div>

                
  <div class="form__group">
    <label class="form__label form__label--required">お問い合わせ内容</label>
    <textarea name="detail" class="form__input" rows="5" placeholder="お問い合わせ内容をご記載ください" required></textarea>
  </div>

                
  <div class="form__button">
      <button type="submit" class="form__button-submit">確認画面</button>
        
        
  </div>
</form>
</div>
</main>
</body>

</html>
