<template>
    <div v-show="false">
        <slot></slot>
    </div>
</template>

<script>

import PopperTooltip from "tooltip.js";

export default {
    props: {
        name: {},
        placement: { default: 'top' },
        offset: { default: false }
    },

    mounted() {
        document.querySelectorAll(`[data-tooltip-name=${this.name}]`).forEach(elem => {
            new PopperTooltip(elem, {
                placement: this.placement,
                title: this.$el.innerHTML,
                offset: this.offset,
                html: true
            });
        });
    }
}

</script>
