import './bootstrap';

<script>
    const category = document.getElementById('category');
    const subcategory = document.getElementById('subcategory');

    category.addEventListener('change', function () {
        const selected = this.value;

        Array.from(subcategory.options).forEach(option => {
            if (!option.dataset.category) return;

            if (option.dataset.category === selected) {
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        });

        subcategory.value = '';
    });
</script>