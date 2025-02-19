<?php if (!empty($banners)): ?>
<div class="slider">
    <?php foreach ($banners as $url): ?>
    <div class="slide"><img src="<?php echo $url; ?>" alt="Banner Image"></div>
    <?php endforeach; ?>
</div>
<?php else: ?>
<p>No banners available.</p>
<?php endif; ?>

<style>
.slider {
    display: flex;
    overflow: hidden;
    width: 80%;
    height: 400px;
    position: relative;
    margin: auto;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    background: #f5f5f5;
    5
}

.slide {
    min-width: 100%;
    transition: transform 1s ease;
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>

<script>
let currentIndex = 0;

function showNextSlide() {
    const slides = document.querySelectorAll('.slide');
    currentIndex = (currentIndex + 1) % slides.length;
    const offset = -currentIndex * 100;
    slides.forEach(slide => {
        slide.style.transform = `translateX(${offset}%)`;
    });
}
setInterval(showNextSlide, 2000);
</script>