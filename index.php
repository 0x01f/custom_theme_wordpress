<?php get_header(); ?>

<body>
<main class="main">
    <div class="container">
        <div class="uslugi">
            <div class="text text-center">
                <?php the_field("service_title"); ?>
            </div>
            <?php if( have_rows('services_repeater') ): ?>
            <div class="items d-flex align-items-center justify-content-evenly">
                <?php while( have_rows('services_repeater') ): the_row(); 
                    $image = get_sub_field('img');
                    $title = get_sub_field('title');
                    ?>
                <div class="image-block">
                    <?php if( !empty( $image ) ): ?>
                    <div class="thumbnail">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <?php endif; ?>
                    <h3 class="title"><?php echo $title; ?></h3>
                    <?php if( have_rows('list_repeater') ): ?>
                    <div class="dropdown-text">
                        <ul>
                            <?php while( have_rows('list_repeater') ): the_row(); ?>
                            <li class="text-item"><span class="orange-dot"></span> <?php the_sub_field('text'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            
        </div>
      	<div class="form-container">
			<h1 class="form-title">ЗАБРОНИРОВАТЬ <span class="color-title">АВТОРСКИЙ ТУР</span></h1>
			<div class="input-row">
			  <select name="tour1" class="dropdown">
				<option value="option1">Выбрать тур</option>
				<option value="option2">Тур 1</option>
				<option value="option3">Тур 2</option>
			  </select>
			  <select name="tour2" class="dropdown">
				<option value="option1">Выбрать экскурсию</option>
				<option value="option2">Экскурсия 1</option>
				<option value="option3">Экскурсия 2</option>
			  </select>
			  <select name="date" class="dropdown">
				<option value="option1">Выберете дату</option>
				<option value="option2">Дата 1</option>
				<option value="option3">Дата 2</option>
			  </select>
			</div>
			<div class="input-row">
			  <input class="input-field" type="text" name="name" placeholder="Ваше имя">
			  <input class="input-field" type="tel" name="phone" placeholder="Номер телефона">
			  <input class="input-field" type="email" name="email" placeholder="Ваша почта">
			</div>
			<div class="comments">
			  <textarea name="comments" class="comment-box" placeholder="Комментарий"></textarea>
			</div>
			<div class="button-b">
			  <button class="submit-button">Забронировать</button>
			</div>
				<div class="button-info">
				<p>Нажимая, вы даете согласие на обработку персональных данных.</p>
			</div>
  		</div>
    </div>
</main>

<!-- Подключение Bootstrap JS (необходимо для некоторых компонентов) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/scripts.js"></script>
</body>