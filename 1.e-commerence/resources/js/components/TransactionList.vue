<template>
    <div class="col-3">
        <div class="card mt-3">
            <img :src="image_url"/>
            <div class="card-body">
                <h5 class="card-title">
                    <slot name="name"></slot>
                </h5>
                <p class="card-text">
                    <slot name="description"></slot>
                </p>
                <a :href="detail_url" class="btn btn-primary">View Detail</a>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ["image_url", "detail_url"]
    };
</script>
