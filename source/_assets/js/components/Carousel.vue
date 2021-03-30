<template>
    <div class="carouselImg">
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: {
        wrapAround: { default: true },
        autoPlay: { default: false },
    },

    mounted() {
        new Flickity(this.$el, {
            wrapAround: this.wrapAround,
            autoPlay: this.autoPlay,
            cellAlign: 'left',
            contian: true
        })
    }
};
</script>