<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваш сайт</title>
    <!-- Подключение Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	</head>
	
	<!-- Шапка сайта -->
<header class="bg-light header">
    <div class="container py-3">
        <div class="row align-items-center">
            <!-- Логотип и текст -->
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/Rectangle.png" alt="Логотип" class="me-3">
                    <div class="logo-text">
                        Авторские туры и экскурсии по Армении
                    </div>
                </div>
            </div>
            <!-- Контактная информация и кнопка -->
            <div class="col-md-6 d-flex align-items-center justify-content-end">
                <div class="info text-align-right">
                  <div class="phone-number">
                    +374 (77) 533 561
                  </div>
                  <div class="email">
                    ladatravelarmenia@yandex.ru
                  </div>
                </div>
                <button id="showPopupBtn" type="button" class="button btn">Заказать звонок</button>
              </div>
        </div>
        <div class="line"></div>
        <!-- Меню -->
        <nav class="mt-3">
            <?php 
			wp_nav_menu(array(
				'theme_location' => 'primary-menu',
				'menu_class' => 'd-flex justify-content-evenly nav nav-pills nav-menu',
				'walker' => new Walker_Nav_Menu_Custom(),
			));
			?>
        </nav>
    </div>
	  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalLabel">Заказать звонок</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo do_shortcode('[contact-form-7 id="62e97b8" title="Контактная форма 1"]'); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          <button type="submit" form="contactForm" class="btn btn-primary">Отправить</button>
        </div>
      </div>
    </div>
  </div>
</header>