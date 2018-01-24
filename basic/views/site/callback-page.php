<?
$this->title = 'Заказать звонок';
?>
<div class="container mt-3">
  <div class="row">
    <div class="col-md-12 title-wrap">
      <h1>Заказать звонок</h1>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="row">
    <div class="">
      <div class="form-horizontal">
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-4 control-label"></label>
          <div class="col-sm-6">
            <select class="form-control callbackType" name="">
              <option>Обратный звонок</option>
              <option>Написать письмо</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Как к Вам обращаться?*</label>
          <div class="col-sm-6">
            <input type="email" class="form-control userName userFormField require">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-4 control-label">Организация:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control userCompany userFormField">
          </div>
        </div>



        <div class="form-group">
          <label for="inputPassword3" class="col-sm-4 control-label">Контактный телефон:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control userPhone userFormField">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-4 control-label">E-mail:*</label>
          <div class="col-sm-6">
            <input type="text" class="form-control userEmail userFormField require">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-4 control-label">Тема сообщения:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control userSubject userFormField">
          </div>
        </div>

        <div class="form-group">
          <label for="inputPassword3" class="col-sm-4 control-label">Текст сообщения:</label>
          <div class="col-sm-6">
            <textarea class="form-control userMessage userFormField"></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <p>Нажимая кнопку Отправить, Вы даете  <a href="#" data-toggle="modal" data-target="#exampleModal">согласие</a> на обработку своих персональных данных</p>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-10">
            <button class="btn btn-primary btn-callback">Отправить</button>
          </div>
        </div>

        <div class="col-md-12" style="margin-top:15px;">
        <div class="alert alert-info alert-callback" style="display:none;">Заявка отправлена. <br>Благодарим Вас за интерес, проявленный к нашей компании. <br>Мы обязательно ответим Вам в самое ближайшее время</div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Пользовательское соглашение</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
Я, субъект персональных данных, в соответствии с Федеральным законом от 27 июля 2006 года № 152 «О персональных данных» предоставляю ООО "Формула КД" (далее - Оператор), расположенному по адресу г. Нижний Новгород, пер. Мотальный, д. 10, пом. 8-9, согласие на обработку персональных данных, указанных мной в форме веб-чата и/или в форме заказа обратного звонка на сайте в сети «Интернет», владельцем которого является Оператор. 
Состав предоставляемых мной персональных данных является следующим: ФИО, адрес электронной почты и номер телефона. 
Целями обработки моих персональных данных являются: обеспечение обмена короткими текстовыми сообщениями в режиме онлайн-диалога и обеспечение функционирования обратного звонка. 
Согласие предоставляется на совершение следующих действий (операций) с указанными в настоящем согласии персональными данными: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, передачу (предоставление, доступ), блокирование, удаление, уничтожение, осуществляемых как с использованием средств автоматизации (автоматизированная обработка), так и без использования таких средств (неавтоматизированная обработка). 
Я понимаю и соглашаюсь с тем, что предоставление Оператору какой-либо информации о себе, не являющейся контактной и не относящейся к целям настоящего согласия, а равно предоставление информации, относящейся к государственной, банковской и/или коммерческой тайне, информации о расовой и/или национальной принадлежности, политических взглядах, религиозных или философских убеждениях, состоянии здоровья, интимной жизни запрещено. 
В случае принятия мной решения о предоставлении Оператору какой-либо информации (каких-либо данных), я обязуюсь предоставлять исключительно достоверную и актуальную информацию и не вправе вводить Оператора в заблуждение в отношении своей личности, сообщать ложную или недостоверную информацию о себе. 
Я понимаю и соглашаюсь с тем, что Оператор не проверяет достоверность персональных данных, предоставляемых мной, и не имеет возможности оценивать мою дееспособность и исходит из того, что я предоставляю достоверные персональные данные и поддерживаю такие данные в актуальном состоянии. 
Согласие действует по достижении целей обработки или в случае утраты необходимости в достижении этих целей, если иное не предусмотрено федеральным законом. 
Согласие может быть отозвано мною в любое время на основании моего письменного заявления.
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>