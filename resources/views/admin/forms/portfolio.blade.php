<p>
    <b>Назва:</b>
    <br> <input type="text" name="title" <?php if (isset($portfolio)) : ?> value="{{ $portfolio->title }}" <?php endif; ?> />
</p>

<p>
    <b>Посиланя:</b>
    <br> <input type="text" name="url" <?php if (isset($portfolio)) : ?> value="{{ $portfolio->url }}" <?php endif; ?> />
</p>

<p>
    <b>Опис:</b>
    <br> <textarea name="content" id="" cols="30" rows="10"><?php if (isset($portfolio)) : ?> {{ $portfolio->content }} <?php endif; ?> </textarea>
</p>

<?php if (isset($portfolio)) : ?>
    <p>
        <b>Зображення:</b>
        <br> <input type="text" name="image" value="{{ $portfolio->image }}" />
    </p>
<?php endif; ?>

<p>
    <b>Кнопка (посилання):</b>
    <br> <input type="text" name="button_url" <?php if (isset($portfolio)) : ?> value="{{ $portfolio->button_url }}" <?php endif; ?> />
</p>

<p>
    <b>Кнопка (напис):</b>
    <br> <input type="text" name="button_name" <?php if (isset($portfolio)) : ?> value="{{ $portfolio->button_name }}" <?php endif; ?> />
</p>



@csrf