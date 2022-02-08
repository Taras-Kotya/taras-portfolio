<p>
    <b>Портфоліо:</b>
    <br> <input type="text" name="title" value="{{ $site->title }}" />
</p>

<p>
    <b>Ім'я власника:</b>
    <br> <input type="text" name="title_user" value="{{ $site->title_user }}" />
</p>

<p>
    <b>Спеціальність:</b>
    <br> <input type="text" name="specialty" value="{{ $site->specialty }}" />
</p>

<p>
    <b>Привітальне смс:</b>
    <br> <textarea name="welcome_content" id="" cols="30" rows="10">{{ $site->welcome_content }}</textarea>
</p>

<p>
    <b>Фото (кругляш):</b>
    <br> <input type="text" name="photo_colo" value="{{ $site->photo_colo }}" />
</p>

<p>
    <b>Фото (фонове):</b>
    <br> <input type="text" name="photo_back" value="{{ $site->photo_back }}" />
</p>

<p>
    <b>Фото 1:</b>
    <br> <input type="text" name="photo1" value="{{ $site->photo1 }}" />
</p>

<p>
    <b>Фото 2:</b>
    <br> <input type="text" name="photo2" value="{{ $site->photo2 }}" />
</p>

<p>
    <b>Привітання в портфоліо:</b>
    <br> <textarea name="portfolio_content" id="" cols="30" rows="10">{{ $site->portfolio_content }}</textarea>
</p>

<p>
    <b>Портфоліо (запрошення):</b>
    <br> <input type="text" name="portfolio_view" value="{{ $site->portfolio_view }}" />
</p>

@csrf
