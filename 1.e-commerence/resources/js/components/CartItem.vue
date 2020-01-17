<template>
  <li class="list-group-item">
    <div class="row">
      <cart-image :image_url="image_url"></cart-image>
      <cart-item-description :price="price" :qty="qty">
        <slot></slot>
      </cart-item-description>
        <slot name="delete_form"></slot>
    </div>
  </li>
</template>
<script>
export default {
  props: ["image_url","price","qty"]
};
</script>
