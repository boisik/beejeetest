<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <div class="row">
            <div class="col-md-3 col-md-offset-3  col-lg-3 col-lg-offset-3 col-sm-12 col-xs-12 center-block">
                <fieldset>
                    <legend>Авторизация</legend>

                    <form method="POST" id="auth">
                        <label for="add_name">Введите Ваше Имя</label><br/>
                        <input type="text" id="add_name" name="add_name" value=""/>
                        <br/>
                        <br/>
                        <label for="add_email">Введите Пароль</label><br/>
                        <input type="text" id="add_pass" name="add_pass" value=""/>
                        <p class="p_note"></p>
                        <input type="hidden" name="operation" value="auth"/>
                        <input type="submit"/>
                    </form>

                </fieldset>
            </div>
            <div class="col-md-3 col-md-offset-3  col-lg-3 col-lg-offset-3 col-sm-12 col-xs-12 center-block">
                <div id="errors" class="errors">
            </div>

        </div>
       <?php $data ?>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('form').submit(function () {
                        var formID = $(this).attr('id'); // Получение ID формы
                        var formNm = $('#' + formID);

                        $.ajax({
                            type: 'POST',
                            url: '/auth/auth/', // Обработчик формы отправки
                            data: formNm.serialize(),
                            success: function (data) {


                                $('.errors').html(data);
                            }
                        });
                        return false;
                    });
                });
            </script>
